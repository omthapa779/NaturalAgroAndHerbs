@extends('layouts.navs')
@section('title','About')
@section('content')
<section class="about_us_page w_100 h_85vh padding_vs padding_s10 flex justify_sb gap_xs">
    <div class="right_about_page w_100 h_100 flex_cl gap_xvh justify_sb">
        <h1 class="black_cl">About Us</h1>
        <h4 class="font_w400  text_aj">Nestled in the heart of Nepal, in the shadow of the majestic 
            Mount Everest, Natural Agro and Herbs is dedicated to bringing the pure 
            essence of the Himalayas to the world. We specialize in producing premium 
            essential oils extracted from wild and organically grown herbs and spices,
            reflecting the pristine environment from which they originate.​
        </h4>
        <div clWhy Choosass="mission_tab flex_cl justify_sb w_100 h_100 padding_vxs padding_sxs bradius_s mtop_s">
            
            <div class="mission_top flex gap_xs align_c">
                <div class="icon_holder flex_c">
                    <h3><i class="ri-crosshair-2-fill background_cl font_w400"></i></h3>
                </div>
                <h3 class="black_cl">Our Mission</h3>
            </div>

            <h4 class="font_w400 text_aj">
                Our mission is to deliver nature's purest essence to our customers worldwide,
                promoting well-being through high-quality essential oils while upholding 
                sustainable and ethical practices.
            </h4>
        </div>
    </div>
    <div class="left_about_page w_100 h_100 overflow_hidden bradius_s">
        <img src="{{ asset('./resources/images/about/Mount_everest.jpg') }}" alt="About Natural Agro and Herbs | Photo of Mount Everest" class="w_100 h_100 object_fc object_pb">
    </div>
</section>
<section class="why_choose_us w_100 h_100vh padding_vs padding_s10 flex_cl justify_c align_c">
    <!-- Section Header -->
    <div class="section_header w_100 flex_cl align_c text_ac">
        <h2 class="black_cl">Why Choose Us</h2>
        <h4 class="font_w400 w_50 mtop_s">We're committed to bringing you the purest essential oils through sustainable practices and rigorous quality standards.</h4>
    </div>
    
    <!-- Features Grid -->
    <div class="features_grid w_100 flex justify_sb mtop_s">
        <!-- Feature 1: Purity -->
        <div class="feature_card w_fc flex_cl align_c text_ac">
            <div class="feature_icon_container flex_c">
                <i class="ri-drop-line"></i>
            </div>
            <h3 class="black_cl mtop_s">100% Pure</h3>
            <h4 class="font_w400 mtop_s">Our oils are extracted using methods that preserve their therapeutic properties.</h4>
            <div class="feature_indicator"></div>
        </div>
        
        <!-- Feature 2: Sustainable -->
        <div class="feature_card w_fc flex_cl align_c text_ac">
            <div class="feature_icon_container flex_c">
                <i class="ri-plant-line"></i>
            </div>
            <h3 class="black_cl mtop_s">Sustainable</h3>
            <h4 class="font_w400 mtop_s">We source our plants ethically and support regenerative farming practices.</h4>
            <div class="feature_indicator"></div>
        </div>
        
        <!-- Feature 3: Tested -->
        <div class="feature_card w_fc flex_cl align_c text_ac">
            <div class="feature_icon_container flex_c">
                <i class="ri-test-tube-line"></i>
            </div>
            <h3 class="black_cl mtop_s">Lab Tested</h3>
            <h4 class="font_w400 mtop_s">Every batch undergoes rigorous testing to ensure quality and potency.</h4>
            <div class="feature_indicator"></div>
        </div>
    </div>
</section>
@endsection