@extends('layouts.admin_navs')
@section('title', 'Product Index')

@section('content')
<div class="product_index_page w_100 h_fc padding_vs padding_s10 relative">
    <!-- Page Header -->
    <div class="flex justify_sb align_c w_100 mtop_s">
        <div class="flex_cl gap_xvh">
            <h2 class="black_cl">Product Management</h2>
            <h4 class="font_w400 primary_cl">View, edit, and manage all your products</h4>
        </div>
        <a href="{{ route('product.upload') }}" class="custom-button primary">
            <h4 class="background_cl"><i class="ri-add-line background_cl"></i> Add New Product</h4>
        </a>
    </div>

    <!-- Search and Filter Section -->
    <div class="w_100 mtop_m">
        <form action="{{ route('product.index') }}" method="GET" class="flex gap_xxs align_c w_100 mbottom_s">
            <div class="flex w_100 relative">
                <input type="text" name="search" placeholder="Search products..." class="contact_input w_100 padding_sxxs padding_vxxs bradius_s border_none shadow_m" value="{{ request()->search ?? '' }}">
                <button type="submit" class="search_button absolute right_1 top_50p transform_y_n50">
                    <h4><i class="ri-search-line primary_cl"></i></h4>
                </button>
            </div>
            <select name="category" class="contact_input padding_sxxs padding_vxxs bradius_s border_none shadow_m">
                <option value="">All Categories</option>
                <option value="essential oil" {{ request()->category == 'essential oil' ? 'selected' : '' }}>Essential Oil</option>
                <option value="blend oils" {{ request()->category == 'blend oils' ? 'selected' : '' }}>Blend Oils</option>
                <option value="herbs and spices" {{ request()->category == 'herbs and spices' ? 'selected' : '' }}>Herbs and Spices</option>
                <option value="hair and oil" {{ request()->category == 'hair and oil' ? 'selected' : '' }}>Hair and Oil</option>
                <option value="our combos" {{ request()->category == 'our combos' ? 'selected' : '' }}>Our Combos</option>
            </select>
            <button type="submit" class="custom-button primary">
                <h4 class="background_cl">Filter</h4>
            </button>
            @if(request()->has('search') || request()->has('category'))
            <a href="{{ route('product.index') }}" class="custom-button secondary">
                <h4>Reset</h4>
            </a>
            @endif
        </form>
    </div>

    <!-- Products Grid -->
    <div class="w_100 mtop_m">
        @if($products->isEmpty())
            <div class="flex_c flex_cl w_100 padding_sxs padding_vs bg_white bradius_s shadow_m">
                <div class="flex_c flex_cl gap_s">
                    <div class="flex_c">
                        <h3><i class="ri-inbox-line primary_cl" style="font-size: 3vw;"></i></h3>
                    </div>
                    <h3 class="black_cl text_ac">No products found</h3>
                    <h5 class="font_w400 primary_cl text_ac">Try adjusting your search or add new products.</h5>
                    <a href="{{ route('product.upload') }}" class="custom-button primary mtop_s">
                        <h4 class="background_cl">Add New Product</h4>
                    </a>
                </div>
            </div>
        @else
        <div class="products_grid mtop_s">
        @foreach ($products as $product)
            <div class="flex_cl bg_white bradius_s shadow_s overflow_hidden hover_up">
                @if($product->product_image)
                    <div class="product_img" style="background-image: url('{{ asset('storage/' . $product->product_image) }}')"></div>
                @else
                    <div class="product_img flex_c">
                        <i class="ri-image-line" style="font-size: 3vw; color: #ccc;"></i>
                    </div>
                @endif
                <div class="flex_cl gap_xvh padding_sxxs padding_vxs">
                    <div class="flex justify_sb align_c">
                        <h4 class="black_cl font_w500">{{ $product->product_name }}</h4>
                    </div>
                    <div class="flex gap_xxs">
                        <div class="product_category_tag padding_sxxs padding_vxxs">
                            <h6 class="background_cl font_w500">{{ ucfirst($product->category) }}</h6>
                        </div>
                        @if($product->is_featured)
                            <div class="featured_badge padding_sxxs padding_vxxs">
                                <h6 class="font_w500">Featured</h6>
                            </div>
                        @endif
                    </div>
                    <h5 class="text_desc">{{ Str::limit(strip_tags($product->product_description), 100) }}</h5>
                    
                    <!-- Size Selection and Price -->
                    <div class="flex_cl gap_xxs w_100 mtop_s">
                        @if($product->sizes && count($product->sizes) > 0)
                            <select class="admin-size-selector contact_input padding_vxxs bradius_s w_100" data-product-id="{{ $product->id }}">
                                @foreach($product->sizes as $size)
                                <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                                @endforeach
                            </select>
                            <h5 class="primary_cl font_w500" id="admin-price-{{ $product->id }}">
                                @if($product->defaultSize())
                                    NPR {{ number_format($product->defaultSize()->price, 2) }}
                                @else
                                    NPR {{ number_format($product->sizes[0]->price, 2) }}
                                @endif
                            </h5>
                        @elseif($product->price)
                            <h5 class="primary_cl font_w500">NPR {{ number_format($product->price, 2) }}</h5>
                        @else
                            <h5 class="primary_cl font_w500">Price on request</h5>
                        @endif
                    </div>
                    
                    <div class="flex gap_xs mtop_s w_100 justify_sb">
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="custom-button product_admin_link secondary">
                            <h4><i class="ri-edit-line"></i> Edit</h4>
                        </a>
                        <form method="POST" action="{{ route('admin.product.delete', $product->id) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="custom-button primary product_admin_link">
                                <h4 class="background_cl"><i class="ri-delete-bin-line background_cl"></i> Delete</h4>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
                
            <!-- Pagination -->
            <div class="flex_c w_100 mtop_m">
                {{ $products->links() }}
            </div>
        @endif
    </div>
</div>

<style>
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        gap: 0.5vw;
    }
    
    .pagination li {
        display: inline-block;
    }
    
    .pagination li a, .pagination li span {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.8vh 1vw;
        background-color: white;
        color: var(--text-color);
        border-radius: 0.5vw;
        text-decoration: none;
        box-shadow: 0 0.2vh 0.5vh rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .pagination li.active span {
        background-color: var(--primary_color);
        color: white;
    }
    
    .pagination li a:hover {
        background-color: rgba(44, 95, 45, 0.1);
    }
</style>
<script>
    document.querySelectorAll('.admin-size-selector').forEach(selector => {
        selector.addEventListener('change', function() {
            const productId = this.getAttribute('data-product-id');
            const selectedOption = this.options[this.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            
            // Update the price display
            const priceElement = document.getElementById(`admin-price-${productId}`);
            priceElement.textContent = `NPR ${parseFloat(price).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        });
    });
</script>
@endsection