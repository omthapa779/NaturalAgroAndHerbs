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
                <h3 class="font_w400"><i class="ri-calendar-line background_cl"></i></h3>
            </div>
            <div class="flex_cl gap_xvh mleft_s">
                <h3 class="black_cl">{{ $newProductsThisMonth }}</h3>
                <h4>Product this Month</h4>
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
                        <h4 class="black_cl font_w500">{{ $product->product_name }}</h4>
                        <div class="flex justify_sb align_c">
                            <h5 class="category_tag">{{ $product->category }}</h5>
                            <h5 class="primary_cl">NPR {{ $product->price }}</h5>
                        </div>
                        <h5 class="text_desc">{!! Str::limit($product->product_description, 100) !!}</h5>
                        <div class="flex gap_xs mtop_s w_100 justify_sb">
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="custom-button product_admin_link secondary">
                                <h4><i class="ri-edit-line"></i> Edit </h4>
                            </a>
                            <form method="POST" action="{{ route('admin.product.delete', $product->id) }}" style="display: inline;">
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
@endsection