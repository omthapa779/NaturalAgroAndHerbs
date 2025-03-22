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
            <h3 class="font_w500 w_75">Discover the finest essential oils extracted from nature's best herbs and plants, crafted from purity and wellness.</h3>
            <h3><a href="#" class="custom-button primary">Explore Our Oils</a></h3>
        </div>
        <div class="left_hero w_100 flex justify_fe align_fe gap_xvh">
          <a href="#"><i class="ri-whatsapp-line social_icons"></i></a>
          <a href="#"><i class="ri-facebook-circle-line social_icons"></i></a>
          <a href="#"><i class="ri-instagram-line social_icons"></i></a>
        </div>
    </div>
</section>
<section class="about_us_section h_100vh"></section>
@endsection

