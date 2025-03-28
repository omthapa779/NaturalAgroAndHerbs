@foreach($products as $product)
<div class="masonry_item">
    <div class="product_card bg_white bradius_s shadow_m overflow_h hover_up">
        <div class="product_image_wrapper">
            <div class="product_image" style="background-image: url('{{ asset('storage/' . $product->product_image) }}')"></div>
        </div>
        <div class="product_card_content flex_cl gap_xs padding_sxxs padding_vxxs">
            <h3 class="product_name black_cl">{{ $product->product_name }}</h3>
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
            <h5 class="product_description font_w400 text_limit_2 opacity_7">{{ strip_tags(substr($product->product_description, 0, 150)) }}</h5>
            <div class="flex justify_sb align_c w_100 mtop_xs">
                <h4 class="product_price primary_cl font_w500">NPR {{ number_format($product->price, 2) }}</h4>
                <a href="{{ route('product.detail', $product->id) }}" class="product_card_view view_details_btn custom-button primary_outline">
                    <h5>View Details</h5>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach