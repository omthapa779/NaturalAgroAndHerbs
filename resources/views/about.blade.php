@extends('layouts.navs')
@section('title','About')
@section('content')
<section class="about_us_page w_100 h_85vh padding_vs padding_s10 flex justify_sb gap_xs">
    <div class="right_about_page w_100 h_100 flex_cl gap_xvh justify_sb">
        <h1 class="black_cl">About Us</h1>
        <h4 class="font_w400  text_aj">Nestled in the heart of Nepal, in the shadow of the majestic 
            Mount Everest, Mystic Oil and Herbs is dedicated to bringing the pure 
            essence of the Himalayas to the world. We specialize in producing premium 
            essential oils extracted from wild and organically grown herbs and spices,
            reflecting the pristine environment from which they originate.​
        </h4>
        <div class="mission_tab flex_cl gap_xs justify_c w_100 h_100 padding_vxs padding_sxs bradius_s mtop_s">
            
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
<section class="team_section w_100 padding_vs padding_s10 flex_cl">
    <!-- Section Header (Left-aligned) -->
    <div class="section_header w_100">
        <h2 class="black_cl">Our Team</h2>
        <h4 class="font_w400 w_50 mtop_s">Meet the passionate experts behind our essential oils, dedicated to bringing nature's purest remedies to your doorstep.</h4>
    </div>
    
    <!-- Team Grid (3 cards per row) -->
    <div class="team_grid w_100 flex justify_sb flex_wrap mtop_m">
        <!-- Team Member 1 -->
        <div class="team_card flex_cl bradius_s overflow_hidden">
            <div class="team_photo_holder w_100 overflow_hidden">
                <img src="{{ asset('./resources/images/team/chairman.jpg') }}" alt="Baburam Khadka | Natural Agro and Herbs" class="w_100 h_100 object_fc team_photo">
            </div>
            <div class="team_info w_100 padding_vxs">
                <h3 class="black_cl">Baburam Khadka</h3>
                <h4 class="primary_cl font_w500">Founder & Chairman</h4>
            </div>
        </div>
    </div>
</section>
@endsection