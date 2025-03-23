@extends('layouts.navs')
@section('title','Home')
@section('content')
<section class="hero_section w_100 h_85vh flex_cl flex_c padding_vs padding_s10" name="Landing Section">
    <div class="marquee_container w_100 h_100 flex_c">
        <div class="marquee_content flex gap_xs">
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
        </div>
        <div class="marquee_content flex gap_xs">
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
        </div>
        <div class="marquee_content flex gap_xs">
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
            <h1>NATURAL AGRO AND HERBS NATURAL AGRO AND HERBS </h1>
        </div>
    </div>
    <div class="product_image_hero w_100 h_100 flex_c">
        <img src="{{ asset('./resources/images/home/hero_product1.png') }}" alt="Product of Natural Agro and Herbs" class="h_85">
    </div>
    <div class="hero_contents w_100 h_100 flex justify_sb">
        <div class="right_hero w_100 flex_cl justify_fe gap_xvh">
            <h2 class="black_cl w_75">Pure Essence, Natural Wellness.</h2>
            <h4 class="font_w500 w_75">Discover the finest essential oils extracted from nature's best herbs and plants, crafted from purity and wellness.</h4>
            <h4><a href="#" class="custom-button primary">Explore Our Oils</a></h4>
        </div>
        <div class="left_hero w_100 flex justify_fe align_fe gap_xvh">
          <a href="#"><i class="ri-whatsapp-line social_icons"></i></a>
          <a href="#"><i class="ri-facebook-circle-line social_icons"></i></a>
          <a href="#"><i class="ri-instagram-line social_icons"></i></a>
        </div>
    </div>
</section>
<section class="about_us_section w_100 h_100vh">
    <div class="about_us_section_holder w_100 h_100 flex_c flex_cl padding_s10 gap_xvh">
        <h2 class="text_ac w_50 black_cl">About Natural Agro and Herbs</h2>
        <h4 class="font_w500 text_ac w_50">At Natural Agro and Herbs, We produce premium essentials oils from wild and organically grown herbs and spices, adhering to stringent E.U and U.S.D.A standards.
            Our advanced steam distillation techniques ensure the highest quality, delivering nature's pure essence to our customer worldwide.
        </h4>
        <a href="#"><h4 class="text_button primary_cl">Our Story <i class="ri-arrow-right-line primary_cl"></i></h4></a>
    </div>
    <div class="about_us_images w_100 h_100 flex_c">
        <img src="{{ asset('./resources/images/home/lemon_grass.png') }}" class="about_image first">
        <img src="{{ asset('./resources/images/home/lemon_grass.png') }}" class="about_image second">
    </div>
</section>
<section class="popular_categories w_100 h_100vh padding_vs padding_s10 gap_xvh">
    <h2 class="black_cl">POPULAR CATEGORIES</h2>
    <div class="grid h_100 padding_vxs">
        <div class="grid_block h_100 div1" style="background-image: url('https://img.freepik.com/premium-psd/argan-oil-products-mockup_23-2149287503.jpg?w=740')">
            <a href="" class="h_100">
            <div class="overlay w_100 h_100"></div>
            <div class="grid_content w_100 h_100 flex_cl justify_fe">
                <h2 class="background_cl">Blend Oils</h2>
                <h4 class="font_w400 background_cl">8 Products</h4>
            </div>
            </a>
        </div>
        
        <div class="grid_block h_100 div2" style="background-image: url('https://img.freepik.com/premium-psd/bottles-with-tags-mockup-real-context_23-2149223454.jpg?w=826')">
            <a href="" class="h_100">    
            <div class="overlay w_100 h_100"></div>
            <div class="grid_content w_100 h_100 flex_cl justify_fe">
                <h2 class="background_cl">Herbs & Spices</h2>
                <h4 class="font_w400 background_cl">10 Products</h4>
            </div>
        </a>
        </div>
        <div class="grid_block h_100 div3" style="background-image: url('https://img.freepik.com/premium-psd/cosmetic-products-mock-up-selfcare_23-2149296938.jpg?w=360');">
            <a href="" class="h_100">    
            <div class="overlay w_100 h_100"></div>
            <div class="grid_content w_100 h_100 flex_cl justify_fe">
                <h2 class="background_cl">Essential Oils</h2>
                <h4 class="font_w400 background_cl">10 Products</h4>
            </div>
            </a>
        </div>
        <div class="grid_block h_100 div4"></div>
        <div class="grid_block h_100 div5" style="background-image: url('https://img.freepik.com/free-psd/pump-bottle-mockup_1332-60667.jpg?t=st=1742712240~exp=1742715840~hmac=79f641a3f6ac3b07b5dc9feb792018751a99632631dc148ebf395e4bad142c8b&w=826');">
            <a href="" class="h_100">    
            <div class="overlay w_100 h_100"></div>
            <div class="grid_content w_100 h_100 flex_cl justify_fe">
                <h2 class="background_cl">Hair & Skin</h2>
                <h4 class="font_w400 background_cl">10 Products</h4>
            </div>
            </a>
        </div>
        <div class="grid_block h_100 div6" style="background-image: url('https://img.freepik.com/premium-psd/sustainability-cleaning-products-mockup-design_23-2150031165.jpg?w=740');">
            <a href="" class="h_100">
            <div class="overlay w_100 h_100"></div>
            <div class="grid_content w_100 h_100 flex_cl justify_fe">
                <h2 class="background_cl">Our Combo</h2>
                <h4 class="font_w400 background_cl">10 Products</h4>
            </div>
            </a>
        </div>
    </div>
</section>
<section class="featured_products w_100 h_fc padding_vs padding_s10 flex_cl">
    <div class="title_holder_home flex justify_sb align_c">
        <h2 class="black_cl">Featured Products</h2>
        <a href="#"><h4 class="text_button primary_cl">View More <i class="ri-arrow-right-line primary_cl"></i></h4></a>
    </div>
    <div class="product_container w_100 h_fc padding_vxs">
        <div class="carousel_wrapper w_100 h_fc overflow_hidden">
            <!-- Left Navigation Button -->
            <button class="carousel_nav prev_btn flex_c" aria-label="Previous products">
                <h3><i class="ri-arrow-left-line"></i></h3>
            </button>
            
            <div class="product_carousel w_100 h_fc flex">
                <!-- Product 1 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/free-photo/cannabis-oil-bottle-composition_23-2148977733.jpg?t=st=1742722661~exp=1742726261~hmac=9c9e7ea8732c80e8e1e3af9ce79fc3a46b0dd75a036fc42e24b506de59c73a33&w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Essential Oils</h5>
                        <h3 class="black_cl">Gooseberry Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2500</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/free-psd/pump-bottle-mockup_1332-60667.jpg?t=st=1742725619~exp=1742729219~hmac=6c59e6c2583f931aa2d7c1c32f60ae016db56317fc4ebea7a426dd90926579a5&w=826')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Hair and Skin</h5>
                        <h3 class="black_cl">Onion & Jojoba Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 3000</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/premium-psd/amber-essential-oil-bottle-mockup_97654-574.jpg?w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Essential Oils</h5>
                        <h3 class="black_cl">Neem Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2500</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/premium-psd/argan-oil-products-mockup_23-2149287503.jpg?w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Essential Oils</h5>
                        <h3 class="black_cl">Argan Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 3200</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/premium-psd/bottles-with-tags-mockup-real-context_23-2149223454.jpg?w=826')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Blend Oils</h5>
                        <h3 class="black_cl">Lavender Blend</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2800</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="product_card flex_cl h_fc">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/premium-psd/sustainability-cleaning-products-mockup-design_23-2150031165.jpg?w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Hair and Skin</h5>
                        <h3 class="black_cl">Tea Tree Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2700</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Clone of first 3 products for seamless looping -->
                <!-- Clone Product 1 -->
                <div class="product_card flex_cl h_fc clone">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/free-photo/cannabis-oil-bottle-composition_23-2148977733.jpg?t=st=1742722661~exp=1742726261~hmac=9c9e7ea8732c80e8e1e3af9ce79fc3a46b0dd75a036fc42e24b506de59c73a33&w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Essential Oils</h5>
                        <h3 class="black_cl">Gooseberry Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2500</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Clone Product 2 -->
                <div class="product_card flex_cl h_fc clone">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/free-psd/pump-bottle-mockup_1332-60667.jpg?t=st=1742725619~exp=1742729219~hmac=6c59e6c2583f931aa2d7c1c32f60ae016db56317fc4ebea7a426dd90926579a5&w=826')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Hair and Skin</h5>
                        <h3 class="black_cl">Onion & Jojoba Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 3000</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Clone Product 3 -->
                <div class="product_card flex_cl h_fc clone">
                    <div class="image_holder flex_c" style="background-image: url('https://img.freepik.com/premium-psd/amber-essential-oil-bottle-mockup_97654-574.jpg?w=740')"></div>
                    <div class="product_content gap_xvh">
                        <h5 class="product_category w_fc font_w500">Essential Oils</h5>
                        <h3 class="black_cl">Neem Oil</h3>
                        <div class="costButton w_100 mtop_s flex_cl gap_xvh">
                            <h4 class="primary_cl">NPR 2500</h4>
                            <h4><a href="#" class="custom-button primary w_100 text_ac">View Details</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Navigation Button -->
            <button class="carousel_nav next_btn flex_c" aria-label="Next products">
                <h3><i class="ri-arrow-right-line"></i></h3>
            </button>
        </div>
    </div>
</section>
@endsection