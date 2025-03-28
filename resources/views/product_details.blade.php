@extends('layouts.navs')
@section('title', 'Product Details')

@section('content')
<div class="main_container">
   
     <!-- Premium Product Showcase -->
    <section class="w_100 padding_vxs padding_s10">
        <div class="flex justify_sb gap_l product_showcase">
            
            <!-- Right: Product Essential Info -->
            <div class="product_detail_top w_50 flex_cl gap_xxs padding_vxs mtop_m">
                <div class="flex gap_xxs">
                    <div class="product_category_tag padding_sxxs padding_vxxs">
                        <h5 class="font_w500 background_cl">{{ ucfirst($product->category) }}</h5>
                    </div>
                    @if($product->is_featured)
                    <div class="featured_badge padding_sxxs padding_vxxs">
                        <h5 class="font_w500 background_cl"><i class=" background_cl font_w400 ri-award-fill"></i> Featured</h5>
                    </div>
                    @endif
                </div>
                
                <h2 class="black_cl font_w500">{{ $product->product_name }}</h2>
                <h3 class="primary_cl font_w500">NPR {{ number_format($product->price, 2) }}</h3>
                
                <div class="w_100 border_top padding_vxs ">
                    <h4 class="font_w400 opacity_8">{{ strip_tags(substr($product->product_description, 0, 150)) }}...</h4>
                </div>
                
                <div class="flex gap_s">
                    <div class="contact_option flex align_c gap_xxs bg_light bradius_s padding_sxxs padding_vxxs hover_up">
                        <h5 class="primary_cl"><i class="ri-whatsapp-line"></i> +977 9851074527</h5>
                    </div>
                    <div class="contact_option flex align_c gap_xxs bg_light bradius_s padding_sxxs padding_vxxs hover_up">
                        <h5 class="primary_cl"><i class="ri-mail-line"></i> n77agroherbs@gmail.com</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_detail_image w_100 mtop_s flex justify_fs gap_xs">
                <div class="product_main_image bradius_s overflow_hidden">
                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="w_100 h_100 object_fct">
                </div>
            @if($product->extra_image)
                <div class="product_extra_image bradius_s overflow_hidden">
                    <img src="{{ asset('storage/' . $product->extra_image) }}" alt="{{ $product->product_name }} additional view" class="w_100 h_100 object_fct">
                </div>
            @endif
        </div>
    </section>
    
    <!-- Elegant Content Section -->
    <section class="w_100 padding_vs padding_s10">
        <div class="w_100 flex_cl gap_l">
            <!-- Product Description -->
            <div class="content_section w_100 flex_cl gap_s">
                <div class="flex align_c gap_xs">
                    <div class="icon_holder flex_c">
                        <h4 class="background_cl"><i class="background_cl font_w400 ri-file-list-3-line"></i></h4>
                    </div>
                    <h3 class="detail_titles black_cl font_w500 section_title">Product Description</h3>
                </div>
                <h4 class="w_100 padding_sxs font_w500 padding_vxs bg_white bradius_s shadow_m">
                    {!! $product->product_description !!}
                </h4>
            </div>
            
            <!-- Product Benefits -->
            <div class="content_section w_100 flex_cl gap_s">
                <div class="flex align_c gap_xs">
                    <div class="icon_holder flex_c">
                        <h4 class="background_cl"><i class="background_cl font_w400 ri-award-line"></i></h4>
                    </div>
                    <h3 class="detail_titles black_cl font_w500 section_title">Benefits</h3>
                </div>
                <h4 class="w_100 font_w500 padding_sxs padding_vxs bg_white bradius_s shadow_m">
                    {!! $product->benefits !!}
                </h4>
            </div>
            
            <!-- How To Use -->
            <div class="content_section w_100 flex_cl gap_s">
                <div class="flex align_c gap_xs">
                    <div class="icon_holder flex_c">
                        <h4 class="background_cl"><i class="background_cl font_w400 ri-guide-line"></i></h4>
                    </div>
                    <h3 class="detail_titles black_cl font_w500 section_title">How To Use</h3>
                </div>
                <h4 class="w_100 font_w500 padding_sxs padding_vxs bg_white bradius_s shadow_m text_jc">
                    {!! $product->how_to_use !!}
                </h4>
            </div>
        </div>
    </section>
    
    <!-- Related Products Showcase -->
    <section class="w_100 padding_vs padding_s10">
        <div class="flex_cl gap_s w_100">
            <div class="flex_cl align_c text_ac">
                <h2 class="black_cl">You May Also Like</h2>
                <div class="header_line"></div>
            </div>
            
            <div class="related_products_grid w_100 mtop_m">
                @foreach($relatedProducts as $relatedProduct)
                <a href="/product/{{ $relatedProduct->id }}" class="related_product_card bg_white bradius_s shadow_m overflow_hidden hover_up">
                    <div class="related_image_container overflow_hidden">
                        <img src="{{ asset('storage/' . $relatedProduct->product_image) }}" alt="{{ $relatedProduct->product_name }}" class="w_100 h_100 object_fc">
                        <div class="overlay w_100 h_100"></div>
                    </div>
                    <div class="padding_sxxs padding_vxs relative">
                        <div class="absolute product_category_tag padding_sxxs padding_vxxs">
                            <h5 class="background_cl font_w500">{{ ucfirst($relatedProduct->category) }}</h5>
                        </div>
                        <div class="mtop_m">
                            <h4 class="black_cl font_w500">{{ $relatedProduct->product_name }}</h4>
                            <h5 class="primary_cl font_w500 mtop_s">NPR {{ number_format($relatedProduct->price, 2) }}</h5>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection