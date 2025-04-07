<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '') | Mystic Oil & Herbs</title>
    <link rel="stylesheet" href="{{ asset('./resources/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('./resources/css/specifics.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Load GSAP with defer to improve page load performance -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
</head>
<body>
    
    <div class="fullscreen_nav z_100">
        <div class="nav_content flex_cl justify_sb h_100vh w_100">
            <div class="nav_header flex justify_sb align_c w_100">
                <div class="nav_logo">
                    <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo | Natural Agro and Herbs" class="h_100">
                </div>
                <button class="nav_close_btn">
                    <h4><i class="ri-close-line background_cl"></i></h4>
                </button>
            </div>
            
            <div class="nav_main flex justify_sb w_100">
                <div class="nav_sections flex justify_sb w_100">
                    <div class="nav_section">
                        <h3 class="section_title accent_cl">Main Menu</h3>
                        <div class="nav_links flex_cl gap_xs mtop_s">
                            <a href="/" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-home-4-line background_cl"></i></h4>
                                <h4 class="background_cl">Home</h4>
                            </a>
                            <a href="/about" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-information-line background_cl"></i></h4>
                                <h4 class="background_cl">About</h4>
                            </a>
                            <a href="/products" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-shopping-bag-3-line background_cl"></i></h4>
                                <h4 class="background_cl">Products</h4>
                            </a>
                            <a href="/process" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-plant-line background_cl"></i></h4>
                                <h4 class="background_cl">Process</h4>
                            </a>
                            <a href="/contact" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-mail-line background_cl"></i></h4>
                                <h4 class="background_cl">Contact</h4>
                            </a>
                            <a href="/dashboard" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-dashboard-line background_cl"></i></h4>
                                <h4 class="background_cl">Admin Dashboard</h4>
                            </a>
                        </div>
                    </div>
                    
                    <div class="nav_section">
                        <h3 class="section_title accent_cl">Categories</h3>
                        <div class="nav_links flex_cl gap_xs mtop_s">
                            <a href="{{ route('products', ['category' => 'blend oils']) }}" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-drop-line background_cl"></i></h4>
                                <h4 class="background_cl">Carrier Oils</h4>
                            </a>
                            <a href="{{ route('products', ['category' => 'essential oil']) }}" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-flask-line background_cl"></i></h4>
                                <h4 class="background_cl">Essential Oils</h4>
                            </a>
                            <a href="{{ route('products', ['category' => 'herbs and spices']) }}" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-leaf-line background_cl"></i></h4>
                                <h4 class="background_cl">Herbs and Spices</h4>
                            </a>
                            <a href="{{ route('products', ['category' => 'hair and oil']) }}" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-heart-line background_cl"></i></h4>
                                <h4 class="background_cl">Hair and Skin</h4>
                            </a>
                        </div>
                    </div>
                    
                    <div class="nav_decorative">
                        <div class="nav_tagline">
                            <h2 class="accent_cl">Pure Essence,</h2>
                            <h2 class="accent_cl">Natural Wellness</h2>
                            <h4 class="background_cl mtop_s w_75">Discover the finest essential oils extracted from nature's best herbs and plants.</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="nav_footer flex justify_sb align_c w_100">
                <div class="contact_info contact_info_nav">
                    <h4 class="background_cl">info@mysticoil.com</h4>
                    <h4 class="background_cl">(+977) 9851025698</h4>
                </div>
                <div class="social_links flex gap_m">
                    <a href="#" class="social_link">
                        <h4><i class="ri-whatsapp-line social_icons background_cl"></i></h4>
                    </a>
                    <a href="#" class="social_link">
                        <h4><i class="ri-facebook-circle-line social_icons background_cl"></i></h4>
                    </a>
                    <a href="#" class="social_link">
                        <h4><i class="ri-instagram-line social_icons background_cl"></i></h4>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="decorative_circles">
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
        </div>
    </div>

    <div class="main_container padding_ts">
        <navs class="navbar w_100 h_10vh padding_s10 flex justify_sa ">
            <div class="right_nav h_100 w_100 flex align_c gap_xs">
                <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo | Natural Agro and Herbs" class="h_100">
                <div class="links_holder flex gap_xs">
                    <h4><a href="/">Home</a></h4>
                    <h4><a href="/about">About</a></h4>
                    <h4><a href="/products">Products</a></h4>
                    <h4><a href="/process">Process</a></h4>
                    <h4><a href="/contact">Contact</a></h4>
                </div>
            </div>
            <div class="left_nav h_100 flex align_c gap_xs">
                <h4><a href="/contact" class="custom-button secondary">Inquire Now!</a></h4>
                <button class="custom-button primary menu_extended"><h4><i class="ri-menu-fill background_cl"></i></h4></button>
            </div>
        </navs>
        @yield('content')
        <footer class="footer w_100 h_fc flex justify_sb padding_vs padding_s10 gap_xvh">
            <div class="logo_container_footer w_100 flex_cl justify_sb">
                <h2 class="accent_cl">Mystic Oil And <br> Herbs</h2>

                <div class="social_link_holder flex gap_xs">
                    <a href="#"><i class="ri-whatsapp-line social_icons background_cl"></i></a>
                    <a href="#"><i class="ri-facebook-circle-line social_icons background_cl"></i></a>
                    <a href="#"><i class="ri-instagram-line social_icons background_cl"></i></a>
                </div>
            </div>
            <div class="links_container  h_fc flex justify_sb gap_xs">
                <div class="left_link_container w_fc h_fc padding_sxs">
                    <h3 class="accent_cl no_wrap">Quick Links</h3>

                    <div class="links_holder mtop_s flex_cl gap_xvh">
                        <a href="/"><h4 class=" footer_link font_w400 background_cl">Home</h4></a>
                        <a href="/about"><h4 class=" footer_link font_w400 background_cl">About</h4></a>
                        <a href="/process"><h4 class=" footer_link font_w400 background_cl">Process</h4></a>
                        <a href="#"><h4 class=" footer_link font_w400 background_cl">Products</h4></a>
                        <a href="/contact"><h4 class=" footer_link font_w400 background_cl">Contact Us</h4></a>
                    </div>
                </div>
                <div class="left_link_container w_fc h_fc padding_sxs">
                    <h3 class="accent_cl no_wrap">Categories</h3>

                    <div class="links_holder mtop_s flex_cl gap_xvh">
                        <a href="{{ route('products', ['category' => 'blend oils']) }}"><h4 class="footer_link font_w400 background_cl">Carrier Oils</h4></a>
                        <a href="{{ route('products', ['category' => 'essential oil']) }}"><h4 class="footer_link font_w400 background_cl">Essential Oils</h4></a>
                        <a href="{{ route('products', ['category' => 'herbs and spices']) }}"><h4 class="footer_link font_w400 background_cl">Herbs and Spices</h4></a>
                        <a href="{{ route('products', ['category' => 'hair and oil']) }}"><h4 class="footer_link font_w400 background_cl">Hair and Skin</h4></a>
                        <a href="{{ route('products', ['category' => 'our combos']) }}"><h4 class="footer_link font_w400 background_cl">Our Combo</h4></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="author w_100 padding_vxs text_ac">
            <h4 class="background_cl">Site Build By Tilasmi</h4>
        </div>
    </div>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js" defer></script> 
    <script src="{{ asset('./resources/scripts/logic.js') }}" defer></script>
</body>
</html>