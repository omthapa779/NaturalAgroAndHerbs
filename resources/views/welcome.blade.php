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
            <h4><a href="/products" class="custom-button primary">Explore Our Oils</a></h4>
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
        <a href="/about"><h4 class="text_button primary_cl">Learn More. <i class="ri-arrow-right-line primary_cl"></i></h4></a>
    </div>
    <div class="about_us_images w_100 h_100 flex_c">
        <img src="{{ asset('./resources/images/home/lemon_grass.png') }}" class="about_image first">
        <img src="{{ asset('./resources/images/home/lemon_grass.png') }}" class="about_image second">
    </div>
</section>

<section class="popular_categories w_100 h_100vh padding_vs padding_s10 gap_xvh">
    <h2 class="black_cl">Popular Categories</h2>
    <div class="grid h_100 padding_vxs">
        <div class="grid_block h_100 div1" style="background-image: url('https://img.freepik.com/premium-psd/argan-oil-products-mockup_23-2149287503.jpg?w=740')">
            <a href="{{ route('products', ['category' => 'blend oils']) }}" class="h_100">
                <div class="overlay_category w_100 h_100"></div>
                <div class="grid_content w_100 h_100 flex_cl justify_fe">
                    <h2 class="background_cl">Blend Oils</h2>
                    <h4 class="font_w400 background_cl">{{ $categoryCounts['blend oils'] }} Products</h4>
                </div>
            </a>
        </div>

        <div class="grid_block h_100 div2" style="background-image: url('https://img.freepik.com/premium-psd/bottles-with-tags-mockup-real-context_23-2149223454.jpg?w=826')">
            <a href="{{ route('products', ['category' => 'herbs and spices']) }}" class="h_100">
                <div class="overlay_category w_100 h_100"></div>
                <div class="grid_content w_100 h_100 flex_cl justify_fe">
                    <h2 class="background_cl">Herbs & Spices</h2>
                    <h4 class="font_w400 background_cl">{{ $categoryCounts['herbs and spices'] }} Products</h4>
                </div>
            </a>
        </div>

        <div class="grid_block h_100 div3" style="background-image: url('https://img.freepik.com/premium-psd/cosmetic-products-mock-up-selfcare_23-2149296938.jpg?w=360');">
            <a href="{{ route('products', ['category' => 'essential oil']) }}" class="h_100">
                <div class="overlay_category w_100 h_100"></div>
                <div class="grid_content w_100 h_100 flex_cl justify_fe">
                    <h2 class="background_cl">Essential Oils</h2>
                    <h4 class="font_w400 background_cl">{{ $categoryCounts['essential oil'] }} Products</h4>
                </div>
            </a>
        </div>

        <div class="grid_block h_100 div4"></div>

        <div class="grid_block h_100 div5" style="background-image: url('https://img.freepik.com/free-psd/pump-bottle-mockup_1332-60667.jpg?t=st=1742712240~exp=1742715840~hmac=79f641a3f6ac3b07b5dc9feb792018751a99632631dc148ebf395e4bad142c8b&w=826');">
            <a href="{{ route('products', ['category' => 'hair and oil']) }}" class="h_100">
                <div class="overlay_category w_100 h_100"></div>
                <div class="grid_content w_100 h_100 flex_cl justify_fe">
                    <h2 class="background_cl">Hair & Skin</h2>
                    <h4 class="font_w400 background_cl">{{ $categoryCounts['hair and oil'] }} Products</h4>
                </div>
            </a>
        </div>

        <div class="grid_block h_100 div6" style="background-image: url('https://img.freepik.com/premium-psd/sustainability-cleaning-products-mockup-design_23-2150031165.jpg?w=740');">
            <a href="{{ route('products', ['category' => 'our combos']) }}" class="h_100">
                <div class="overlay_category w_100 h_100"></div>
                <div class="grid_content w_100 h_100 flex_cl justify_fe">
                    <h2 class="background_cl">Our Combo</h2>
                    <h4 class="font_w400 background_cl">{{ $categoryCounts['our combos'] }} Products</h4>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="featured_products w_100 h_fc padding_vs padding_s10 flex_cl">
    <div class="title_holder_home flex justify_sb align_c">
        <h2 class="black_cl">Featured Products</h2>
        <a href="{{ route('products', ['featured' => '1']) }}"><h4 class="text_button primary_cl">View More <i class="ri-arrow-right-line primary_cl"></i></h4></a>
    </div>
    <div class="product_container w_100 h_fc padding_vxs">
        <div class="carousel_wrapper w_100 h_fc overflow_hidden">
            <!-- Left Navigation Button -->
            <button class="carousel_nav prev_btn flex_c" aria-label="Previous products">
                <h3><i class="ri-arrow-left-line"></i></h3>
            </button>
            
            <div class="product_carousel w_100 h_fc flex">
                @foreach($featuredProducts as $product)
                    <div class="product_card flex_cl h_fc bg_white bradius_s shadow_m overflow_h hover_up">
                        <div class="image_holder flex_c" style="background-image: url('{{ asset('storage/' . $product->product_image) }}')"></div>
                        <div class="product_content gap_xvh padding_sxxs padding_vxxs">
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
                            <h3 class="black_cl">{{ $product->product_name }}</h3>
                            <div class="costButton w_100  flex_cl gap_xs">
                                <div class="flex_cl gap_xxs w_100">
                                    <h4 class="primary_cl font_w500" id="carousel-price-{{ $product->id }}">
                                        @if($product->sizes && $product->defaultSize())
                                            NPR {{ number_format($product->defaultSize()->price, 2) }}
                                        @elseif($product->price)
                                            NPR {{ number_format($product->price, 2) }}
                                        @else
                                            Price on request
                                        @endif
                                    </h4>
                                    @if($product->sizes && count($product->sizes) > 1)
                                    <select class="carousel-size-selector contact_input padding_vxxs bradius_s w_100" data-product-id="{{ $product->id }}">
                                        @foreach($product->sizes as $size)
                                        <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <a href="{{ route('product.detail', $product->id) }}" class="custom-button primary w_100 text_ac">
                                    <h4 class="background_cl">View Details</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($featuredProducts as $product)
                    <div class="product_card flex_cl h_fc bg_white bradius_s shadow_m overflow_h hover_up">
                        <div class="image_holder flex_c" style="background-image: url('{{ asset('storage/' . $product->product_image) }}')"></div>
                        <div class="product_content gap_xvh padding_sxxs padding_vxxs">
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
                            <h3 class="black_cl">{{ $product->product_name }}</h3>
                            <div class="costButton w_100 mtop_s flex_cl gap_xs">
                                <div class="flex_cl gap_xxs w_100">
                                    @if($product->sizes && count($product->sizes) > 1)
                                    <select class="carousel-size-selector contact_input padding_vxxs bradius_s w_100" data-product-id="{{ $product->id }}">
                                        @foreach($product->sizes as $size)
                                        <option value="{{ $size->id }}" data-price="{{ $size->price }}" {{ $size->is_default ? 'selected' : '' }}>{{ $size->size }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                    <h4 class="primary_cl font_w500" id="carousel-price-{{ $product->id }}">
                                        @if($product->sizes && $product->defaultSize())
                                            NPR {{ number_format($product->defaultSize()->price, 2) }}
                                        @elseif($product->price)
                                            NPR {{ number_format($product->price, 2) }}
                                        @else
                                            Price on request
                                        @endif
                                    </h4>
                                </div>
                                <a href="{{ route('product.detail', $product->id) }}" class="custom-button primary w_100 text_ac">
                                    <h4 class="background_cl">View Details</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
            <!-- Right Navigation Button -->
            <button class="carousel_nav next_btn flex_c" aria-label="Next products">
                <h3><i class="ri-arrow-right-line"></i></h3>
            </button>
        </div>
    </div>
</section>

<section class="process_section h_100vh flex_cl justify_c align_c padding_vs padding_s10 relative">
    <div class="section_header w_100 flex_cl align_c text_ac">
        <h2 class="black_cl">Our Process</h2>
        <h4 class="font_w400 w_50">From plant to bottle: discover how we create our pure essential oils</h4>
    </div>
    
    <!-- Process Navigation -->
    <div class="timeline_nav w_100 flex justify_c  mtop_m">
        <div class="timeline_track flex justify_c">
            <div class="timeline_progress"></div>
            <div class="timeline_points flex justify_sb w_100">
                <div class="timeline_point align_c flex_cl active" data-step="1">
                    <div class="point_dot"></div>
                    <h5 class="point_label">Harvest</h5>
                </div>
                <div class="timeline_point align_c flex_cl" data-step="2">
                    <div class="point_dot"></div>
                    <h5 class="point_label">Prepare</h5>
                </div>
                <div class="timeline_point align_c flex_cl" data-step="3">
                    <div class="point_dot"></div>
                    <h5 class="point_label">Extract</h5>
                </div>
                <div class="timeline_point align_c flex_cl" data-step="4">
                    <div class="point_dot"></div>
                    <h5 class="point_label">Test</h5>
                </div>
                <div class="timeline_point align_c flex_cl" data-step="5">
                    <div class="point_dot"></div>
                    <h5 class="point_label">Bottle</h5>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Process Content Container -->
    <div class="process_content w_100 h_75 flex mtop_m">
        <!-- Step 1: Harvest -->
        <div class="process_detail h_100 active flex w_100" data-step="1">
            <div class="detail_text w_50 flex_cl justify_c">
                <h3 class="black_cl no_wrap">Harvesting at Peak Potency</h3>
                <h4 class="font_w400 mtop_s">We carefully select and harvest herbs and plants at their optimal time, when essential oil content is at its highest concentration.</h4>
                <ul class="detail_list mtop_m w_100">
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Sustainable Farming: Our farms use organic practices to ensure the purest oils</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Seasonal Selection: Each plant is harvested during its ideal season</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Hand Picked: Careful manual harvesting preserves plant integrity</h5>
                    </li>
                </ul>
            </div>
            <div class="detail_visual w_50 flex_c">
                <div class="visual_container">
                    <img src="{{ asset('./resources/images/process/1.jpg') }}" alt="Harvesting herbs" class="visual_img w_100 h_100">
                </div>
            </div>
        </div>
        
        <!-- Step 2: Prepare -->
        <div class="process_detail h_100 flex w_100" data-step="2">
            <div class="detail_text w_50 flex_cl justify_c">
                <h3 class="black_cl">Careful Preparation</h3>
                <h4 class="font_w400 mtop_s">Our herbs undergo a meticulous preparation process to preserve their essential compounds.</h4>
                <ul class="detail_list mtop_m w_100">
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Sorting & Cleaning: Each batch is carefully sorted to remove any impurities</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Controlled Drying: Temperature and humidity are precisely monitored</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Preparation: Plants are prepared according to their specific requirements</h5>
                    </li>
                </ul>
            </div>
            <div class="detail_visual w_50 flex_c">
                <div class="visual_container">
                    <img src="{{ asset('./resources/images/process/2.jpg') }}" style="object-position: 50% 100%" alt="Preparing herbs" class="visual_img w_100 h_100">
                </div>
            </div>
        </div>
        
        <!-- Step 3: Extract -->
        <div class="process_detail h_100 flex w_100" data-step="3">
            <div class="detail_text w_50 flex_cl justify_c">
                <h3 class="black_cl">Steam Distillation</h3>
                <h4 class="font_w400 mtop_s">Using advanced steam distillation techniques, we gently extract pure essential oils while preserving their natural therapeutic properties.</h4>
                <ul class="detail_list mtop_m w_100">
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Traditional Methods: We use time-tested distillation techniques</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Low Pressure Steam: Gentle extraction preserves delicate compounds</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Separation: Oil naturally separates from hydrosol during cooling</h5>
                    </li>
                </ul>
            </div>
            <div class="detail_visual w_50 flex_c">
                <div class="visual_container">
                    <img src="{{ asset('./resources/images/process/3.jpg') }}" alt="Distillation process" class="visual_img w_100 h_100">
                </div>
            </div>
        </div>
        
        <!-- Step 4: Test -->
        <div class="process_detail h_100 flex w_100" data-step="4">
            <div class="detail_text w_50 flex_cl justify_c">
                <h3 class="black_cl">Quality Assurance</h3>
                <h4 class="font_w400 mtop_s">Each batch undergoes rigorous testing to ensure purity, potency, and compliance with international standards.</h4>
                <ul class="detail_list mtop_m w_100">
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Gas Chromatography: Advanced testing identifies all compounds present</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Organoleptic Testing: Expert evaluation of aroma, color, and viscosity</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Purity Verification: Ensuring 100% pure oil with no additives</h5>
                    </li>
                </ul>
            </div>
            <div class="detail_visual w_50 flex_c">
                <div class="visual_container">
                    <img src="{{ asset('./resources/images/process/4.jpg') }}" alt="Quality testing" class="visual_img w_100 h_100">
                </div>
            </div>
        </div>
        
        <!-- Step 5: Bottle -->
        <div class="process_detail h_100 flex w_100" data-step="5">
            <div class="detail_text w_50 flex_cl justify_c">
                <h3 class="black_cl">Precision Bottling</h3>
                <h4 class="font_w400 mtop_s">Our oils are carefully bottled in amber glass to protect their properties, then sealed and packaged with eco-friendly materials.</h4>
                <ul class="detail_list mtop_m w_100">
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Amber Glass Protection: Dark glass prevents light degradation</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Precise Filling: Automated systems ensure exact measurements</h5>
                    </li>
                    <li class="detail_item flex gap_xs mtop_s">
                        <div class="item_dot"></div>
                        <h5 class="primary_cl">Quality Sealing: Airtight caps preserve freshness and potency</h5>
                    </li>
                </ul>
            </div>
            <div class="detail_visual w_50 flex_c">
                <div class="visual_container">
                    <img src="https://img.freepik.com/free-photo/essential-oil-bottles-arrangement_23-2149074075.jpg?w=740" alt="Bottling process" class="visual_img w_100 h_100">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Process Navigation Controls -->
    <div class="process_controls flex gap_xs mtop_m">
        <button class="control_button prev_step flex_c">
            <h3><i class="ri-arrow-left-line"></i></h3>
        </button>
        <button class="control_button play_pause flex_c">
            <h3><i class="ri-pause-line"></i></h3>
        </button>
        <button class="control_button next_step flex_c">
            <h3><i class="ri-arrow-right-line"></i></h3>
        </button>
    </div>
</section>

<section class="benefits_home w_100 h_100vh padding_vs padding_s10 flex justify_sb gap_xs align_c">
    <div class="benefits_home_content w_100 h_100 flex_cl gap_xvh">
        <h2 class="black_cl w_75">Benefits of Essentials Oils</h2>
        <h4 class="font_w500 w_85">Essential Oils, derived from varaious plants, have been utilized for centuries in alternative 
            medicine practices like aromatherapy. These concentrated extracts offer a multitude of health benefits, ehancing both physicaland mental well-being.
        </h4>
        <ul class="mtop_s flex_cl gap_xvh mleft_1">
            <li><h4 class="font_w500">Stress Reduction</h4></li>
            <li><h4 class="font_w500">Improved Sleep Quality</h4></li>
            <li><h4 class="font_w500">Improved Sleep Quality</h4></li>
            <li><h4 class="font_w500">Pain Relief</h4></li>
            <li><h4 class="font_w500">Respiratory Benefits</h4></li>
        </ul>

        <h4><a href="/products" class="custom-button primary mtop_s">Explore Our Oils</a></h4>
    </div>
    <div class="image_holder_benefit w_100 h_100 overflow_hidden  bradius_s">
        <img src="{{asset('./resources/images/home/lemon_grass.png')}}" class="object_fc w_100 h_100" alt="Benefits of Essential Oils">
    </div>
</section>

<section class="contact_section w_100 h_100vh padding_vs padding_s10 flex justify_sb gap_xs align_c">
    <div class="left_contact_section w_100 h_100 flex_cl justify_sb">
        <div class="top_content_contact flex_cl gap_xvh">
            <h2 class="black_cl w_75">Bringing Nature's Best to You.</h2>
            <h4 class="font_w400 w_85">We're here to offer you pure, high-quality essential oils
                straight from the heart of nature.
            </h4>
        </div>
        <div class="bottom_content_contact">
            <a href="/contact"><h4 class="text_button primary_cl font_w500">Other Contact Options <i class="ri-arrow-right-line primary_cl"></i></h4></a>
        </div>
    </div>
    <div class="right_contact_section w_100 h_100 flex_c">
        <form action="" class="contact_form w_100 h_100 flex_cl justify_sb" method="POST">            
            <div class="form_row w_100 flex gap_xs">
                <div class="form_field w_100 flex_cl">
                    <label for="name" class="form_label"><h5 class="font_w500">Full Name</h5></label>
                    <input class="contact_input w_100" type="text" id="name" name="name" required placeholder="Enter Your Full Name">
                </div>
            </div>
            <div class="form_row w_100 flex gap_xs">
                <div class="form_field w_100 flex_cl">
                    <label for="email" class="form_label"><h5 class="font_w500">Email Address</h5></label>
                    <input class="contact_input w_100" type="email" id="email" name="email" required placeholder="Enter Your Email Address">
                </div>
            </div>
            
            <!-- Phone and Inquiry Type in one row -->
            <div class="form_row w_100 flex gap_xs">
                <div class="form_field w_50 flex_cl">
                    <label for="number" class="form_label"><h5 class="font_w500">Contact Number</h5></label>
                    <input class="contact_input w_100" type="tel" id="number" name="number" required placeholder="Enter Your Contact Number">
                </div>
                <div class="form_field w_50 flex_cl">
                    <label for="inquiry" class="form_label"><h5 class="font_w500">Inquiry Type</h5></label>
                    <select class="contact_input w_100" id="inquiry" name="inquiry" required>
                        <option value="">Select Inquiry Type</option>
                        <option value="product_inquiry">Product Inquiry</option>
                        <option value="business_deal">Business Deals</option>
                        <option value="complaints_queries">Complaints / Queries</option>
                        <option value="custom_order">Custom Order</option>
                        <option value="others">Others</option>
                    </select>
                </div>
            </div>
            
            <!-- Contact Method and Company in one row -->
            <div class="form_row w_100 flex gap_xs">
                <div class="form_field w_50 flex_cl">
                    <label for="contact_method" class="form_label"><h5 class="font_w500">Preferred Contact Method</h5></label>
                    <select class="contact_input w_100" id="contact_method" name="contact_method" required>
                        <option value="">Select Preferred Method</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone Call</option>
                        <option value="whatsapp">WhatsApp</option>
                        <option value="any">Any</option>
                    </select>
                </div>
                <div class="form_field w_50 flex_cl">
                    <label for="company" class="form_label"><h5 class="font_w500">Company Name (Optional)</h5></label>
                    <input class="contact_input w_100" type="text" id="company" name="company" placeholder="Company Name (Optional)">
                </div>
            </div>
            
            <!-- Message as a single input -->
            <div class="form_field w_100 flex_cl">
                <label for="message" class="form_label"><h5 class="font_w500">Your Message</h5></label>
                <textarea class="contact_input w_100" rows="4" id="message" name="message" required placeholder="Your Message Here.."></textarea>
            </div>
            
            <button type="submit" class="form_button w_100 mtop_s"><h4 class="background_cl">Send Inquiry</h4></button>
        </form> 
    </div>
</section>
@endsection
