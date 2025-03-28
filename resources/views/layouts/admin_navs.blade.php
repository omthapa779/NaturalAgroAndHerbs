<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '') | Natural Agro & Herbs</title>
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
                        <h3 class="section_title accent_cl">Admin Essential</h3>
                        <div class="nav_links flex_cl gap_xs mtop_s">
                            <a href="/dashboard" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-home-4-line background_cl"></i></h4>
                                <h4 class="background_cl">Dashboard</h4>
                            </a>
                            <a href="/product-upload" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-upload-2-fill background_cl"></i></h4>
                                <h4 class="background_cl">Product Upload</h4>
                            </a>
                            <a href="#" class="nav_link flex gap_xs align_c">
                                <h4><i class="ri-shopping-bag-3-line background_cl"></i></h4>
                                <h4 class="background_cl">Product List</h4>
                            </a>
                            
                            <form method="POST" action="{{ route('admin.logout') }}" class="">
                                @csrf
                                <button type="submit" class="flex gap_xs nav_link menu_logout w_100 ">
                                    <h4><i class="ri-logout-box-r-line background_cl"></i></h4>
                                    <h4 class="background_cl">Logout</h4>
                                </button>
                            </form>
                        </div>
                    </div>

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
                    <h4 class="background_cl">info@naturalagro.com</h4>
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
                    <h4><a href="/dashboard">Dashboard</a></h4>
                    <h4><a href="/product-upload">Product Upload</a></h4>
                    <h4><a href="/products">Products List</a></h4>
                </div>
            </div>
            <div class="left_nav h_100 flex align_c gap_xs">
                <form method="POST" action="{{ route('admin.logout') }}" class="">
                    @csrf
                    <button type="submit" class="flex gap_xs custom-button secondary w_100 ">
                        <h4 class="primary_cl">Logout</h4>
                    </button>
                </form>
                <button class="custom-button primary menu_extended"><h4><i class="ri-menu-fill background_cl"></i></h4></button>
            </div>
        </navs>
        @yield('content')
    </div>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js" defer></script> 
    <script src="{{ asset('./resources/scripts/logic.js') }}" defer></script>
</body>
</html>