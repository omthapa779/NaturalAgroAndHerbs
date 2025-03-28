@extends('layouts.navs')
@section('title','Admin Login')
@section('content')
<div class="login_page w_100 h_85vh flex_c padding_vs padding_s10 relative">
    <div class="login_container w_50 bg_white bradius_s shadow_m p_xl relative z_10 padding_sxs padding_vxm">
        <div class="login_header flex_cl align_c text_ac mb_l">
            <h2 class="black_cl">Admin Login</h2>
            <h4 class="font_w400 mtop_xs">Sign in to access dashboard</h4>
        </div>

        <form method="POST" action="{{ route('admin.login') }}" class="login_form flex_cl gap_xvh w_100 mtop_m">
            @csrf
            <div class="form_field w_100 flex_cl">
                <label for="email" class="form_label">
                    <h4><i class="ri-mail-line primary_cl"></i> Email Address</h4>
                </label>
                <div class="input_wrapper flex align_c w_100 relative">
                    <input type="email" id="email" name="email" class="contact_input w_100 mtop_1" placeholder="Enter your email address" required>
                </div>
            </div>

            <div class="form_field w_100 flex_cl">
                <label for="password" class="form_label">
                    <h4><i class="ri-lock-line primary_cl"></i> Password</h4>
                </label>
                <div class="input_wrapper flex align_c w_100 relative">
                    <input type="password" id="password" name="password" class="contact_input w_100 mtop_1" placeholder="Enter your password" required>
                    <button type="button" class="toggle_password bg_transparent border_none mtop_1 cursor_pointer">
                        <h4><i class="ri-eye-line primary_cl"></i></h4>
                    </button>
                </div>
            </div>

            <button type="submit" class="form_button w_100 mtop_s">
                <h4 class="background_cl">Sign In</h4>
            </button>
        </form>
    </div>

    <div class="decorative_circles">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
    </div>
</div>
@endsection
