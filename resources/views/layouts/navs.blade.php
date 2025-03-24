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
    <div class="main_container padding_vxs">
        <navs class="navbar w_100 h_10vh padding_s10 flex justify_sa ">
            <div class="right_nav h_100 w_100 flex align_c gap_xs">
                <img src="{{ asset('./resources/images/logo.png') }}" alt="Logo | Natural Agro and Herbs" class="h_100">
                <div class="links_holder flex gap_xs">
                    <h4><a href="/">Home</a></h4>
                    <h4><a href="/">About</a></h4>
                    <h4><a href="/">Products</a></h4>
                    <h4><a href="/">Process</a></h4>
                    <h4><a href="/">Contact</a></h4>
                </div>
            </div>
            <div class="left_nav h_100 flex  align_c gap_xs">
                <h4><a href="#" class="custom-button secondary">Inquire Now!</a></h4>
            </div>
        </navs>
        @yield('content')
    </div>
    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js" defer></script> 
    <script src="{{ asset('./resources/scripts/logic.js') }}" defer></script>
</body>
</html>