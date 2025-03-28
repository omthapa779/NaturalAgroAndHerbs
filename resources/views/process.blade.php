@extends('layouts.navs')
@section('title','Process')
@section('content')
<div class="process_page w_100">
    <!-- Hero Section -->
    <section class="process_hero h_85vh w_100 flex_cl justify_c align_c padding_s10 relative">
        <div class="hero_content_process w_100 flex_cl">
            <h1 class="black_cl">Our Process</h1>
            <h4 class="font_w400 w_50 mtop_s">From carefully selected plants to the final drop in the bottle, discover the meticulous journey behind our pure essential oils. Each step is crafted with precision to ensure the highest quality products for your wellbeing.</h4>
            <div class="hero_action mtop_m">
                <a href="/products" class="custom-button primary">
                    <h4 class="background_cl">Interested to buy?</h4>
                </a>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="process_decorative absolute">
            <div class="process_circle"></div>
            <div class="process_line"></div>
        </div>
    </section>
    
    <!-- Process Overview -->
    <section class="process_overview padding_vs padding_s10 bg_light">
        <div class="overview_content w_100 flex justify_sb align_c">
            <div class="overview_text w_50">
                <h2 class="black_cl">Crafting Nature's Essence</h2>
                <h4 class="font_w400 mtop_s">At Natural Agro and Herbs, we believe that the quality of our essential oils begins long before distillation. Our comprehensive 5-step process ensures that every drop captures the plant's full therapeutic potential.</h4>
            </div>
            <div class="overview_visual w_40 flex_c">
                <div class="overview_stats flex_cl">
                    <div class="stat_item flex justify_sb align_c">
                        <h3 class="black_cl">100%</h3>
                        <h4 class="primary_cl">Pure Essential Oils</h4>
                    </div>
                    <div class="stat_item flex justify_sb align_c mtop_s">
                        <h3 class="black_cl">5</h3>
                        <h4 class="primary_cl">Quality Control Steps</h4>
                    </div>
                    <div class="stat_item flex justify_sb align_c mtop_s">
                        <h3 class="black_cl">2+</h3>
                        <h4 class="primary_cl">Years of Expertise</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Process Steps -->
    <section id="process_steps" class="process_steps padding_vs padding_s10">
        <div class="steps_header w_100 flex_cl">
            <h2 class="black_cl">Our 5-Step Process</h2>
            <h4 class="font_w400 w_50 mtop_s">Each step in our process is carefully executed to preserve the natural properties of our plants and deliver the purest essential oils.</h4>
        </div>
        
        <!-- Step Cards -->
        <div class="step_cards w_100 mtop_m">
            <!-- Step 1: Harvest -->
            <div class="step_card flex bradius_s overflow_hidden">
                <div class="step_number flex_c">
                    <h2 class="background_cl">1</h2>
                </div>
                <div class="step_content flex">
                    <div class="step_text w_50 padding_vxs padding_sxs">
                        <h3 class="black_cl">Harvesting at Peak Potency</h3>
                        <h4 class="font_w400 mtop_s">We carefully select and harvest herbs and plants at their optimal time, when essential oil content is at its highest concentration.</h4>
                        <ul class="step_list mtop_m">
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Sustainable Farming Practices</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Seasonal Selection</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Hand Picked with Care</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="step_visual w_50">
                        <img src="{{ asset('./resources/images/process/1.jpg') }}" alt="Harvesting herbs" class="w_100 h_100 object_fc">
                    </div>
                </div>
            </div>
            
            <!-- Step 2: Prepare -->
            <div class="step_card flex bradius_s overflow_hidden mtop_m">
                <div class="step_number flex_c">
                    <h2 class="background_cl">2</h2>
                </div>
                <div class="step_content flex">
                    <div class="step_visual w_50">
                        <img src="{{ asset('./resources/images/process/2.jpg') }}" style="object-position: 50% 100%" alt="Preparing herbs" class="w_100 h_100 object_fc">
                    </div>
                    <div class="step_text w_50 padding_vxs padding_sxs">
                        <h3 class="black_cl">Careful Preparation</h3>
                        <h4 class="font_w400 mtop_s">Our herbs undergo a meticulous preparation process to preserve their essential compounds and ensure maximum oil yield.</h4>
                        <ul class="step_list mtop_m">
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Sorting & Cleaning</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Controlled Drying</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Plant-Specific Preparation</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Step 3: Extract -->
            <div class="step_card flex bradius_s overflow_hidden mtop_m">
                <div class="step_number flex_c">
                    <h2 class="background_cl">3</h2>
                </div>
                <div class="step_content flex">
                    <div class="step_text w_50 padding_vxs padding_sxs">
                        <h3 class="black_cl">Steam Distillation</h3>
                        <h4 class="font_w400 mtop_s">Using advanced steam distillation techniques, we gently extract pure essential oils while preserving their natural therapeutic properties.</h4>
                        <ul class="step_list mtop_m">
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Traditional Methods</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Low Pressure Steam</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Natural Separation</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="step_visual w_50">
                        <img src="{{ asset('./resources/images/process/3.jpg') }}" alt="Distillation process" class="w_100 h_100 object_fc">
                    </div>
                </div>
            </div>
            
            <!-- Step 4: Test -->
            <div class="step_card flex bradius_s overflow_hidden mtop_m">
                <div class="step_number flex_c">
                    <h2 class="background_cl">4</h2>
                </div>
                <div class="step_content flex">
                    <div class="step_visual w_50">
                        <img src="{{ asset('./resources/images/process/4.jpg') }}" alt="Quality testing" class="w_100 h_100 object_fc">
                    </div>
                    <div class="step_text w_50 padding_vxs padding_sxs">
                        <h3 class="black_cl">Quality Assurance</h3>
                        <h4 class="font_w400 mtop_s">Each batch undergoes rigorous testing to ensure purity, potency, and compliance with international standards.</h4>
                        <ul class="step_list mtop_m">
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Gas Chromatography</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Organoleptic Testing</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Purity Verification</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Step 5: Bottle -->
            <div class="step_card flex bradius_s overflow_hidden mtop_m">
                <div class="step_number flex_c">
                    <h2 class="background_cl">5</h2>
                </div>
                <div class="step_content flex">
                    <div class="step_text w_50 padding_vxs padding_sxs">
                        <h3 class="black_cl">Precision Bottling</h3>
                        <h4 class="font_w400 mtop_s">Our oils are carefully bottled in amber glass to protect their properties, then sealed and packaged with eco-friendly materials.</h4>
                        <ul class="step_list mtop_m">
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Amber Glass Protection</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Precise Filling</h4>
                            </li>
                            <li class="step_item flex gap_xs mtop_s">
                                <div class="item_dot"></div>
                                <h4 class="primary_cl font_w500">Quality Sealing</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="step_visual w_50">
                        <img src="https://img.freepik.com/free-photo/essential-oil-bottles-arrangement_23-2149074075.jpg?w=740" alt="Bottling process" class="w_100 h_100 object_fc">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Quality Commitment -->
    <section class="quality_commitment padding_vs padding_s10 bg_light">
        <div class="commitment_content flex justify_sb align_c">
            <div class="commitment_text w_50">
                <h2 class="black_cl">Our Quality Commitment</h2>
                <h4 class="font_w400 mtop_s">We believe that quality is non-negotiable. Our commitment to excellence drives every decision we make, from selecting the finest plants to implementing rigorous testing protocols.</h4>
                <div class="commitment_points flex_cl mtop_m">
                    <div class="commitment_point flex gap_xs mtop_s">
                        <div class="point_dot"></div>
                        <h4 class="primary_cl font_w500">100% Pure Essential Oils</h4>
                    </div>
                    <div class="commitment_point flex gap_xs mtop_s">
                        <div class="point_dot"></div>
                        <h4 class="primary_cl font_w500">No Synthetic Additives</h4>
                    </div>
                    <div class="commitment_point flex gap_xs mtop_s">
                        <div class="point_dot"></div>
                        <h4 class="primary_cl font_w500">Sustainable Practices</h4>
                    </div>
                    <div class="commitment_point flex gap_xs mtop_s">
                        <div class="point_dot"></div>
                        <h4 class="primary_cl font_w500">Transparent Sourcing</h4>
                    </div>
                </div>
                <div class="commitment_action mtop_m">
                    <a href="/products" class="custom-button primary">
                        <h4 class="background_cl">Explore Our Products</h4>
                    </a>
                </div>
            </div>
            <div class="commitment_visual w_40">
                <div class="certificate_container bradius_s overflow_hidden">
                    <img src="{{ asset('./resources/images/home/hero_product1.png') }}" alt="Quality certification" class="w_100 h_100 object_fc">
                    <div class="certificate_badge flex_c">
                        <div class="badge_inner flex_c">
                            <h5 class="background_cl">Certified <br>Quality</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection