@extends('layouts.navs')
@section('title','404 Oops')
@section('content')
<div class="error_page w_100 h_85vh padding_s10 flex_cl justify_c align_c">
    <div class="error_container w_100 flex_cl align_c text_ac">
        <!-- Animated 404 Text -->
        <div class="animated_404 w_100 flex_c">
            <h1 class="black_cl first_4">4</h1>
            <div class="zero_container">
                <h1 class="black_cl">0</h1>
                <div class="oil_drop"></div>
            </div>
            <h1 class="black_cl last_4">4</h1>
        </div>
        
        <!-- Page Not Found Message -->
        <h4 class="oops_message primary_cl mtop_s">Oops! This essence has evaporated</h4>
        <h4 class="oops_message font_w400 w_75 mtop_s">The page you're looking for doesn't exist or has been moved to another bottle.</h4>
        
        <!-- Action Buttons - Using your existing custom-button component -->
        <div class="error_actions flex gap_xs mtop_m">
            <a href="/" class="custom-button primary">
                <h4 class="background_cl">Return Home</h4>
                <div class="blob-container">
                    <div class="blob"></div>
                </div>
            </a>
            <a href="/products" class="custom-button secondary">
                <h4 class="primary_cl">Explore Our Oils</h4>
                <div class="blob-container">
                    <div class="blob"></div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection