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
            <div class="left_nav h_100 flex  align_c gap_xs">
                <h4><a href="#" class="custom-button secondary">Inquire Now!</a></h4>
            </div>
        </navs>
        @yield('content')
        <footer class="footer w_100 h_fc flex justify_sb padding_vs padding_s10 gap_xvh">
            <div class="logo_container_footer w_100 flex_cl justify_sb">
                <h2 class="accent_cl">Natural Agro and Herbs</h2>

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
                        <a href="#"><h4 class=" footer_link font_w400 background_cl">Contact Us</h4></a>
                    </div>
                </div>
                <div class="left_link_container w_fc h_fc padding_sxs">
                    <h3 class="accent_cl no_wrap">Categories</h3>

                    <div class="links_holder mtop_s flex_cl gap_xvh">
                        <a href="#"><h4 class="footer_link font_w400 background_cl">Carrier Oils</h4></a>
                        <a href="#"><h4 class="footer_link font_w400 background_cl">Essential Oils</h4></a>
                        <a href="#"><h4 class="footer_link font_w400 background_cl">Herbs and Spices</h4></a>
                        <a href="#"><h4 class="footer_link font_w400 background_cl">Hair and Skin</h4></a>
                        <a href="#"><h4 class="footer_link font_w400 background_cl">Our Combo</h4></a>
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