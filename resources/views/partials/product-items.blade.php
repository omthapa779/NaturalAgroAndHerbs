@foreach($products as $product)
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
        
        <!-- Size Selection and Price -->
        <div class="flex_cl gap_xxs w_100 mtop_xs">
            @if(count($product->sizes) > 1)
            <div class="flex justify_sb align_c w_100">
                <h5 class="font_w500">Size:</h5>
                <select class="size-selector contact_input padding_vxxs" data-product-id="{{ $product->id }}">
                    @foreach($product->sizes as $size)
                    <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="flex justify_sb align_c w_100">
                <h4 class="product_price primary_cl font_w500" id="price-{{ $product->id }}">
                    NPR {{ number_format($product->defaultSize()->price, 2) }}
                </h4>
                <a href="{{ route('product.detail', $product->id) }}" class="product_card_view view_details_btn custom-button primary_outline">
                    <h5>View Details</h5>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to all size selectors
    document.querySelectorAll('.size-selector').forEach(selector => {
        selector.addEventListener('change', function() {
            const productId = this.getAttribute('data-product-id');
            const selectedOption = this.options[this.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            
            // Update the price display
            const priceElement = document.getElementById(`price-${productId}`);
            priceElement.textContent = `NPR ${parseFloat(price).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        });
    });
});
</script>