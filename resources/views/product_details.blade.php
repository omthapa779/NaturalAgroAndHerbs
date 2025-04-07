@extends('layouts.navs')
@section('title', $product->product_name)

@section('content')
<div class="product_detail_page w_100 h_fc padding_vs padding_s10">
    <!-- Product Detail Top Section -->
    <div class="product_detail_top flex gap_m w_100 mtop_m">
        <!-- Product Info -->
        <div class="product_detail_info flex_cl gap_s w_50">
            <div class="flex_cl gap_xvh">
                <h2 class="black_cl">{{ $product->product_name }}</h2>
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
            </div>
            
            <!-- Product Description -->
            <div class="product_description ">
                <h4 class="font_w400 text_aj">{!! $product->product_description !!}</h4>
            </div>

            <!-- Size Selection and Price -->
            <div class="product_price_section bg_light bradius_s padding_sxxs padding_vxs ">
                <div class="flex justify_sb align_c w_100">
                    @if($product->sizes && count($product->sizes) > 1)
                    <div class="flex align_c gap_s">
                        <h4 class="font_w500">Size:</h4>
                        <select id="product-size-selector" class="contact_input padding_vxxs bradius_s">
                            @foreach($product->sizes as $size)
                            <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <h3 class="primary_cl font_w500" id="product-price">
                        @if($product->sizes && $product->defaultSize())
                            NPR {{ number_format($product->defaultSize()->price, 2) }}
                        @elseif($product->price)
                            NPR {{ number_format($product->price, 2) }}
                        @else
                            Price on request
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product_detail_image flex gap_s w_100 mtop_s">
            <div class="product_main_image bradius_s shadow_m overflow_hidden">
                <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="w_100 h_100 object_fc object_pc">
            </div>
            @if($product->extra_image)
            <div class="product_extra_image bradius_s shadow_m overflow_hidden">
                <img src="{{ asset('storage/' . $product->extra_image) }}" alt="{{ $product->product_name }} Extra" class="w_100 h_100 object_fc object_pc">
            </div>
            @endif
    </div>
    
    <!-- Product Details Sections -->
    <div class="product_details_sections w_100 mtop_m">
        <!-- Benefits Section -->
        <div class="detail_section bg_white bradius_s shadow_s padding_sxxs padding_vxs mbottom_s">
            <div class="section_title mbottom_s">
                <h3 class="black_cl">Benefits</h3>
            </div>
            <div class="benefits_content">
                {!! $product->benefits !!}
            </div>
        </div>
        
        <!-- How to Use Section -->
        <div class="detail_section bg_white bradius_s shadow_s padding_sxxs padding_vxs">
            <div class="section_title mbottom_s">
                <h3 class="black_cl">How to Use</h3>
            </div>
            <div class="how_to_use_content">
                {!! $product->how_to_use !!}
            </div>
        </div>
    </div>
    
    <!-- Related Products -->
    @if(count($relatedProducts) > 0)
    <div class="related_products w_100 mtop_m">
        <div class="section_header flex_cl gap_xvh text_ac mbottom_s">
            <h2 class="black_cl">Related Products</h2>
            <div class="header_line"></div>
        </div>
        
        <div class="related_products_grid">
            @foreach($relatedProducts as $relatedProduct)
            <div class="related_product_card bg_white bradius_s shadow_s overflow_hidden hover_up">
                <div class="related_image_container">
                    <img src="{{ asset('storage/' . $relatedProduct->product_image) }}" alt="{{ $relatedProduct->product_name }}" class="w_100 h_100 object_fc">
                    <div class="overlay w_100 h_100"></div>
                </div>
                <div class="related_product_info padding_sxxs padding_vxs">
                    <h3 class="black_cl">{{ $relatedProduct->product_name }}</h3>
                    
                    <!-- Size Selection and Price -->
                    <div class="flex justify_sb align_c w_100 mtop_s">
                        @if($relatedProduct->sizes && count($relatedProduct->sizes) > 1)
                        <div class="flex align_c gap_xs">
                            <select class="related-size-selector contact_input padding_vxxs bradius_s" data-product-id="{{ $relatedProduct->id }}">
                                @foreach($relatedProduct->sizes as $size)
                                <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="flex justify_sb align_c w_100">
                            <h4 class="primary_cl font_w500" id="related-price-{{ $relatedProduct->id }}">
                                @if($relatedProduct->sizes && $relatedProduct->defaultSize())
                                    NPR {{ number_format($relatedProduct->defaultSize()->price, 2) }}
                                @elseif($relatedProduct->price)
                                    NPR {{ number_format($relatedProduct->price, 2) }}
                                @else
                                    Price on request
                                @endif
                            </h4>
                            <a href="{{ route('product.detail', $relatedProduct->id) }}" class="custom-button primary_outline">
                                <h5>View</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Size selector functionality for main product
    const sizeSelector = document.getElementById('product-size-selector');
    if (sizeSelector) {
        sizeSelector.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            
            // Update the price display
            const priceElement = document.getElementById('product-price');
            priceElement.textContent = `NPR ${parseFloat(price).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        });
    }
    
    // Size selector functionality for related products
    document.querySelectorAll('.related-size-selector').forEach(selector => {
        selector.addEventListener('change', function() {
            const productId = this.getAttribute('data-product-id');
            const selectedOption = this.options[this.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            
            // Update the price display
            const priceElement = document.getElementById(`related-price-${productId}`);
            priceElement.textContent = `NPR ${parseFloat(price).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        });
    });
});
</script>

<style>
/* Section Title Styles */
.section_title {
    position: relative;
    padding-bottom: 1vh;
    border-bottom: 0.2vh solid rgba(44, 95, 45, 0.1);
}

/* Size Selector Styles */
select.contact_input {
    padding: 0.8vh 1vw;
    border-radius: 0.7vw;
    border: 0.1vw solid rgba(0, 0, 0, 0.2);
    background-color: white;
    font-size: 0.95vw;
    outline: none;
}

select.contact_input:focus {
    border-color: var(--primary_color);
}

/* Related Products Grid */
.related_products_grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2vw;
}

.related_image_container {
    height: 30vh;
    position: relative;
}

/* Content Styling */
.benefits_content, .how_to_use_content {
    line-height: 1.6;
}

.benefits_content ul, .how_to_use_content ul {
    padding-left: 2vw;
    margin-bottom: 1vh;
}

.benefits_content p, .how_to_use_content p {
    margin-bottom: 1vh;
}

@media (max-width: 999px) {
    .product_detail_top {
        flex-direction: column;
    }
    
    .product_detail_image, .product_detail_info {
        width: 100%;
    }
    
    .related_products_grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    select.contact_input {
        font-size: 1.8vw;
    }
}

@media (max-width: 699px) {
    .related_products_grid {
        grid-template-columns: 1fr;
    }
    
    select.contact_input {
        font-size: 3vw;
    }
}
</style>
@endsection