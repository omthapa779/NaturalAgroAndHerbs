@extends('layouts.navs')
@section('title', 'Explore Products')

@section('content')
<div class="w_100 h_fc padding_vxm">
    <!-- Hero Section with Search -->
    <div class="w_100 padding_s10 mbottom_s mtop_m">
        <div class="flex_cl gap_s w_100">
            <div class="flex_cl gap_xvh">
                <h2 class="black_cl">Explore Our Products</h2>
                <h4 class="font_w400 opacity_8">Discover nature's finest essentials for your wellbeing</h4>
            </div>
            
            <!-- Search Bar -->
            <div class="search_container w_100">
                <form action="{{ route('products') }}" method="GET" class="search_form flex w_100">
                    <input type="hidden" name="category" value="{{ request()->category ?? 'all' }}">
                    @if(request()->has('featured'))
                    <input type="hidden" name="featured" value="1">
                    @endif
                    <div class="flex w_100 relative">
                        <input type="text" name="search" placeholder="Search for products..." class="contact_input w_100 padding_s bradius_s border_none shadow_m" value="{{ request()->search ?? '' }}">
                        <button type="submit" class="search_button absolute right_1 top_50p transform_y_n50">
                            <h4><i class="ri-search-line primary_cl"></i></h4>
                        </button>
                        @if(request()->has('search'))
                        <a href="{{ route('products', ['category' => request()->category, 'featured' => request()->featured]) }}" class="search_clear absolute right_4 top_50p transform_y_n50">
                            <h4><i class="ri-close-line background_cl"></i></h4>
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="w_100 mbottom_s padding_s10">
        <!-- Filter Status Bar -->
        <div class="flex gap_xs align_c w_100 mbottom_s">
            @if(request()->has('search'))
            <div class="bg_white padding_sxs padding_vxs bradius_s shadow_xs">
                <h4 class="font_w400">Search results for: <span class="font_w500 primary_cl">"{{ request()->search }}"</span></h4>
            </div>
            @else
            <div class="bg_white padding_sxs padding_vxs bradius_s shadow_xs">
                <h4 class="font_w400">Showing: <span class="font_w500 primary_cl">{{ request()->category ? ucfirst(request()->category) : 'All Products' }}</span></h4>
            </div>
            @endif
            
            <div class="flex gap_xs align_c">
                @if(request()->has('search') || request()->has('category') || request()->has('featured'))
                <a href="{{ route('products') }}" class="reset_filters flex align_c gap_xs bg_white padding_sxs padding_vxs bradius_s shadow_xs hover_up">
                    <h4 class="primary_cl"><i class="ri-refresh-line"></i> Reset Filters</h4>
                </a>
                @endif
                <div class="mobile_filter_toggle flex_c bg_white padding_sxs padding_vxs bradius_s shadow_xs hover_up">
                    <h4 class="font_w400"><i class="ri-filter-3-line primary_cl"></i> Filters</h4>
                </div>
            </div>
        </div>

        <div class="flex gap_m w_100">
            <!-- Filter Sidebar -->
            <div class="filter_sidebar bg_white bradius_s shadow_m padding_sxxs padding_vxs">
                <!-- Search Bar (Mobile) -->
                <div class="search_container_mobile w_100 mbottom_s d_none">
                    <form action="{{ route('products') }}" method="GET" class="search_form flex w_100">
                        <input type="hidden" name="category" value="{{ request()->category ?? 'all' }}">
                        @if(request()->has('featured'))
                        <input type="hidden" name="featured" value="1">
                        @endif
                        <div class="flex w_100 relative">
                            <input type="text" name="search" placeholder="Search..." class="contact_input w_100 padding_sxs bradius_s border_1 border_light" value="{{ request()->search ?? '' }}">
                            <button type="submit" class="search_button absolute right_1 top_50p transform_y_n50">
                                <h5><i class="ri-search-line primary_cl"></i></h5>
                            </button>
                            @if(request()->has('search'))
                            <a href="{{ route('products', ['category' => request()->category, 'featured' => request()->featured]) }}" class="search_clear absolute right_4 top_50p transform_y_n50">
                                <h5><i class="ri-close-line primary_cl"></i></h5>
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
                
                <div class="flex_cl gap_s">
                    <h4 class="black_cl font_w500">Categories</h4>
                    
                    <!-- Categories Filter -->
                    <div class="flex_cl gap_xvh">
                        <a href="{{ route('products', ['search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ !request()->has('category') || request()->category == 'all' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ !request()->has('category') || request()->category == 'all' ? 'primary_cl' : 'black_cl' }}">All Products</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ array_sum($categoryCounts) }}</span>
                        </a>
                        
                        <a href="{{ route('products', ['category' => 'essential oil', 'search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ request()->category == 'essential oil' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ request()->category == 'essential oil' ? 'primary_cl' : 'black_cl' }}">Essential Oil</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ $categoryCounts['essential oil'] }}</span>
                        </a>
                        
                        <a href="{{ route('products', ['category' => 'blend oils', 'search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ request()->category == 'blend oils' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ request()->category == 'blend oils' ? 'primary_cl' : 'black_cl' }}">Blend Oils</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ $categoryCounts['blend oils'] }}</span>
                        </a>
                        
                        <a href="{{ route('products', ['category' => 'herbs and spices', 'search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ request()->category == 'herbs and spices' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ request()->category == 'herbs and spices' ? 'primary_cl' : 'black_cl' }}">Herbs and Spices</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ $categoryCounts['herbs and spices'] }}</span>
                        </a>
                        
                        <a href="{{ route('products', ['category' => 'hair and oil', 'search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ request()->category == 'hair and oil' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ request()->category == 'hair and oil' ? 'primary_cl' : 'black_cl' }}">Hair and Oil</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ $categoryCounts['hair and oil'] }}</span>
                        </a>
                        
                        <a href="{{ route('products', ['category' => 'our combos', 'search' => request()->search, 'featured' => request()->featured]) }}" 
                           class="flex justify_sb align_c w_100 padding_vxs padding_sxxs hover_bg_light bradius_s {{ request()->category == 'our combos' ? 'bg_light' : '' }}">
                            <h5 class="font_w400 {{ request()->category == 'our combos' ? 'primary_cl' : 'black_cl' }}">Our Combos</h5>
                            <span class="badge bg_primary background_cl bradius_s padding_sxxs padding_vxxs">{{ $categoryCounts['our combos'] }}</span>
                        </a>
                    </div>
                    
                    <!-- Featured Products Filter -->
                    <div class="">
                        <h4 class="black_cl font_w500 mbottom_xs">Product Type</h4>
                        <a href="{{ route('products', ['category' => request()->category, 'search' => request()->search, 'featured' => request()->has('featured') ? null : '1']) }}" 
                           class="flex align_c gap_xs padding_vxxs padding_sxxs w_100 mtop_s hover_bg_light bradius_s {{ request()->has('featured') ? 'bg_light' : '' }}">
                            <div class="custom_checkbox {{ request()->has('featured') ? 'checked' : '' }}">
                                <div class="checkmark"></div>
                            </div>
                            <h5 class="font_w400 {{ request()->has('featured') ? 'primary_cl' : 'black_cl' }}">Featured Products</h5>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="w_100">
                @if($products->isEmpty())
                    <div class="flex_c flex_cl w_100 padding_sxs padding_vs bg_white bradius_s shadow_m">
                        <div class="flex_c flex_cl gap_s">
                            <div class="flex_c">
                                <h3><i class="ri-inbox-line primary_cl" style="font-size: 3vw;"></i></h3>
                            </div>
                            <h3 class="black_cl text_ac">No products found</h3>
                            <h5 class="font_w400 primary_cl text_ac">Try adjusting your filters or check back later for new products.</h5>
                        </div>
                    </div>
                @else
                    <div class="products_grid" id="products-container">
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
                                <div class="flex justify_sb align_c w_100 mtop_xs">
                                    <h4 class="product_price primary_cl font_w500">NPR {{ number_format($product->price, 2) }}</h4>
                                    <a href="{{ route('product.detail', $product->id) }}" class="product_card_view view_details_btn custom-button primary_outline">
                                        <h5>View Details</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Load More Button -->
                    @if($products->hasMorePages())
                    <div class="flex_c w_100 mtop_m mbottom_m">
                        <button id="load-more" class="load_more_btn custom-button primary" data-page="1" data-category="{{ request()->category ?? 'all' }}" data-featured="{{ request()->featured ?? '' }}" data-search="{{ request()->search ?? '' }}">
                            <h4 class="background_cl">Load More Products</h4>
                        </button>
                    </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Variables for infinite scroll
  let loading = false;
  const productsContainer = document.getElementById('products-container');
  const loadMoreBtn = document.getElementById('load-more');
  
  // Mobile Filter Toggle
  const mobileFilterToggle = document.querySelector('.mobile_filter_toggle');
  const filterSidebar = document.querySelector('.filter_sidebar');
  
  if (mobileFilterToggle && filterSidebar) {
      mobileFilterToggle.addEventListener('click', function() {
          filterSidebar.classList.toggle('show_filter');
          document.body.classList.toggle('filter_open');
      });
  }
  
  // Load more products function
  function loadMoreProducts() {
      if (loading || !loadMoreBtn) return;
      
      loading = true;
      const nextPage = parseInt(loadMoreBtn.dataset.page) + 1;
      const category = loadMoreBtn.dataset.category;
      const featured = loadMoreBtn.dataset.featured;
      const search = loadMoreBtn.dataset.search;
      
      loadMoreBtn.innerHTML = '<h4 class="background_cl"><i class="background_cl ri-loader-4-line rotating"></i> Loading...</h4>';
      
      // Make AJAX request to load more products
      let url = `/products/load-more?page=${nextPage}&category=${category}`;
      if (featured) url += `&featured=${featured}`;
      if (search) url += `&search=${encodeURIComponent(search)}`;
      
      fetch(url)
          .then(response => response.json())
          .then(data => {
              // Append new products to the container
              const tempContainer = document.createElement('div');
              tempContainer.innerHTML = data.html;
              
              // Process each product card before adding to the DOM
              const productCards = tempContainer.querySelectorAll('.masonry_item');
              productCards.forEach(card => {
                  const productCard = document.createElement('div');
                  productCard.className = 'product_card bg_white bradius_s shadow_m overflow_h hover_up';
                  
                  // Extract the inner content from the masonry item
                  const innerContent = card.querySelector('.product_card').innerHTML;
                  productCard.innerHTML = innerContent;
                  
                  // Add the processed card to the products container
                  productsContainer.appendChild(productCard);
              });
              
              // Update load more button
              if (data.hasMorePages) {
                  loadMoreBtn.dataset.page = nextPage;
                  loadMoreBtn.innerHTML = '<h4 class="background_cl">Load More Products</h4>';
              } else {
                  // Remove load more button if no more pages
                  loadMoreBtn.parentNode.remove();
              }
              
              // Initialize image handling
              initImageHandling();
              
              loading = false;
          })
          .catch(error => {
              console.error('Error loading more products:', error);
              loadMoreBtn.innerHTML = '<h4 class="background_cl">Error Loading Products</h4>';
              loading = false;
          });
  }
  
  // Initialize image handling
  function initImageHandling() {
      document.querySelectorAll('.product_image').forEach(image => {
          // Create a new Image object to check dimensions
          const img = new Image();
          const bgImage = image.style.backgroundImage.replace(/url$$['"]?([^'"]*)['"]?$$/i, '$1');
          
          img.onload = function() {
              const container = image.parentElement;
              
              // If image is portrait (taller than wide)
              if (img.height > img.width) {
                  container.classList.add('portrait');
              } else if (img.width > img.height * 1.5) {
                  // Very wide images
                  container.classList.add('wide');
              }
          };
          
          img.src = bgImage;
      });
  }
  
  // Load more button click event
  if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', loadMoreProducts);
  }
  
  // Initialize image handling on page load
  initImageHandling();
  
  // Implement infinite scroll
  window.addEventListener('scroll', function() {
      if (loading || !loadMoreBtn) return;
      
      // Check if we're near the bottom of the page
      if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 500) {
          loadMoreProducts();
      }
  });
  
  // Close filter sidebar when clicking outside on mobile
  document.addEventListener('click', function(event) {
      if (window.innerWidth <= 699 && 
          filterSidebar && 
          filterSidebar.classList.contains('show_filter') && 
          !filterSidebar.contains(event.target) && 
          !mobileFilterToggle.contains(event.target)) {
          filterSidebar.classList.remove('show_filter');
          document.body.classList.remove('filter_open');
      }
  });
});
</script>
@endsection

