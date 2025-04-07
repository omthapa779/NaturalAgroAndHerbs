@extends('layouts.admin_navs')
@section('title', 'Admin Dashboard')

@section('content')
<div class="dashboard_page w_100 h_fc padding_vs padding_s10 relative">
    <!-- Dashboard Header -->
    <div class="flex justify_sb align_c w_100 mtop_s">
        <div class="flex_cl gap_xvh">
            <h2 class="black_cl">Welcome, {{ Auth::user()->name }}</h2>
            <h4 class="font_w400 primary_cl">Admin Dashboard</h4>
        </div>
    </div>

    <!-- Dashboard Stats -->
    <div class="dashboard_stats w_100 flex gap_s mtop_m flex_wrap">
        <div class="stat_card flex bg_white bradius_s shadow_s">
            <div class="icon_holder flex_c">
                <h3 class="font_w400"><i class="ri-shopping-bag-3-line background_cl"></i></h3>
            </div>
            <div class="flex_cl gap_xvh mleft_s">
                <h3 class="black_cl">{{ $totalProducts }}</h3>
                <h4>Total Products Added</h4>
            </div>
        </div>
        
        <div class="stat_card flex bg_white bradius_s shadow_s">
            <div class="icon_holder flex_c" style="background-color: var(--accent-color);">
                <h3 class="font_w400"><i class="ri-user-line background_cl"></i></h3>
            </div>
            <div class="flex_cl gap_xvh mleft_s">
                <h3 class="black_cl">{{ $weeklyVisitors }}</h3>
                <h4>Weekly Visitors</h4>
            </div>
        </div>
        
        <div class="stat_card flex bg_white bradius_s shadow_s">
            <div class="icon_holder flex_c">
                <h3 class="font_w400"><i class="ri-star-line background_cl"></i></h3>
            </div>
            <div class="flex_cl gap_xvh mleft_s">
                <h3 class="black_cl">{{ $featuredProducts }}</h3>
                <h4>Featured Products</h4>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="w_100 mtop_m">
        <h3 class="black_cl section_title">Quick Actions</h3>
        <div class="flex gap_s mtop_s flex_wrap">
            <a href="{{ route('product.upload') }}" class="action_btn flex_cl flex_c bg_white bradius_s shadow_s hover_up">
                <h3 class="font_w400"><i class="ri-add-circle-line primary_cl"></i></h3>
                <h4 class="mtop_1">Add Product</h4>
            </a>
            <a href="{{ route('product.index') }}" class="action_btn flex_cl flex_c bg_white bradius_s shadow_s hover_up">
                <h3 class="font_w400"><i class="ri-list-check primary_cl"></i></h3>
                <h4 class="mtop_1">All Products</h4>
            </a>
        </div>
    </div>

    <!-- Recent Products -->
    <div class="w_100 mtop_m">
        <div class="flex justify_sb align_c mtop_s">
            <h3 class="black_cl section_title">Recent Products</h3>
            <a href="{{ route('product.index') }}" class="flex align_c gap_xs primary_cl hover_up">
                <h4>View All <i class="ri-arrow-right-line"></i></h4>
                
            </a>
        </div>
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
    </div>
</div>
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