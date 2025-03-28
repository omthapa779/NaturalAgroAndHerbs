@extends('layouts.navs')
@section('title','Contact')
@section('content')
<div class="contact_page w_100">
    <!-- Hero Section - Keeping at 85vh -->
    <section class="contact_hero h_85vh w_100 flex_cl justify_c align_c padding_s10 relative">
        <div class="hero_content_contact w_100 flex_cl">
            <h1 class="black_cl">Get In Touch</h1>
            <h4 class="font_w400 w_50 mtop_s">We'd love to hear from you. Whether you have a question about our products, business inquiries, or anything else, our team is ready to answer all your questions.</h4>
        </div>
        
        <!-- Decorative Elements -->
        <div class="contact_decorative">
            <div class="floating_bottle bottle_1" style="background-image: url('./resources/images/home/hero_product1.png');"></div>
            <div class="floating_bottle bottle_2" style="background-image: url('./resources/images/home/hero_product2.png');"></div>
            <div class="floating_bottle bottle_3" style="background-image: url('./resources/images/home/hero_product1.png');"></div>
        </div>
    </section>
    
    <!-- Contact Information - Setting to 100vh -->
    <section class="contact_info h_100vh padding_vs padding_s10 bg_light flex_cl justify_c">
        <div class="info_content w_100 flex justify_sb align_c">
            <div class="info_text w_50">
                <h2 class="black_cl">Our Contact Information</h2>
                
                <div class="contact_cards flex_wrap w_100 mtop_m">
                    <!-- Address Card -->
                    <div class="contact_card flex_cl bradius_s">
                        <div class="card_icon flex_c">
                            <h4><i class="ri-map-pin-line"></i></h4>
                        </div>
                        <h3 class="black_cl mtop_s">Visit Us</h3>
                        <h4 class="font_w400 mtop_s">123 Nature Way, Green Valley<br>Botanical District, 45678</h4>
                    </div>
                    
                    <!-- Email Card - Made more visible -->
                    <div class="contact_card contact_card_highlight flex_cl bradius_s">
                        <div class="card_icon flex_c">
                            <h4><i class="ri-mail-line"></i></h4>
                        </div>
                        <h3 class="black_cl mtop_s">Email Us</h3>
                        <h4 class="font_w400 mtop_s primary_cl">n77agroherbs@gmail.com <br> 
                            bkhadka5@gmail.com</h4>
                        <a href="mailto:info@naturalagro.com" class="contact_link mtop_s">
                            <span>Send Email</span>
                            <h4><i class="ri-arrow-right-line"></i></h4>
                        </a>
                    </div>
                    
                    <!--  Social Card -->
                    <div class="contact_card flex_cl bradius_s">
                         <div class="card_icon flex_c">
                            <i class="ri-global-line"></i>
                        </div>
                        <h3 class="black_cl mtop_s">Follow Us</h3>
                        <div class="social_links flex gap_xs mtop_s">
                            <a href="#"><i class="ri-facebook-fill social_icons"></i></a>
                            <a href="#"><i class="ri-instagram-line social_icons"></i></a>
                            <a href="#"><i class="ri-whatsapp-fill social_icons"></i></a>
                        </div>
                    </div>
                    
                    <!-- Phone Card - Made more visible-->
                    <div class="contact_card flex_cl contact_card_highlight bradius_s">
                        <div class="card_icon flex_c">
                            <h4><i class="ri-phone-line"></i></h4>
                        </div>
                        <h3 class="black_cl mtop_s">Call Us</h3>
                        <h4 class="font_w400 mtop_s primary_cl font_w500">(+977) 9851074527</h4>
                        <a href="tel:+9779851074527" class="contact_link mtop_s">
                            <span>Call Now</span>
                            <h4><i class="ri-arrow-right-line"></i></h4>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="info_map w_40 h_100">
                <div class="map_container bradius_s overflow_hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215151997223!2d-73.98784692404045!3d40.75798833440232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form Section - Already 100vh -->
    <section class="contact_section w_100 h_100vh padding_vs padding_s10 flex justify_sb gap_xs align_c">
        <div class="left_contact_section w_100 h_100 flex_cl justify_sb">
            <div class="top_content_contact flex_cl gap_xvh">
                <h2 class="black_cl w_75">Bringing Nature's Best to You.</h2>
                <h4 class="font_w400 w_85">We're here to offer you pure, high-quality essential oils
                    straight from the heart of nature.
                </h4>
            </div>
            <div class="bottom_content_contact">
                <a href="#contact_faq"><h4 class="text_button primary_cl font_w500">Explore Our Oils <i class="ri-arrow-right-line primary_cl"></i></h4></a>
            </div>
        </div>
        <div class="right_contact_section w_100 h_100 flex_c">
            <form action="" class="contact_form w_100 h_100 flex_cl justify_sb" method="POST">            
                <div class="form_row w_100 flex gap_xs">
                    <div class="form_field w_100 flex_cl">
                        <label for="name" class="form_label"><h5 class="font_w500">Full Name</h5></label>
                        <input class="contact_input w_100" type="text" id="name" name="name" required placeholder="Enter Your Full Name">
                    </div>
                </div>
                <div class="form_row w_100 flex gap_xs">
                    <div class="form_field w_100 flex_cl">
                        <label for="email" class="form_label"><h5 class="font_w500">Email Address</h5></label>
                        <input class="contact_input w_100" type="email" id="email" name="email" required placeholder="Enter Your Email Address">
                    </div>
                </div>
                
                <!-- Phone and Inquiry Type in one row -->
                <div class="form_row w_100 flex gap_xs">
                    <div class="form_field w_50 flex_cl">
                        <label for="number" class="form_label"><h5 class="font_w500">Contact Number</h5></label>
                        <input class="contact_input w_100" type="tel" id="number" name="number" required placeholder="Enter Your Contact Number">
                    </div>
                    <div class="form_field w_50 flex_cl">
                        <label for="inquiry" class="form_label"><h5 class="font_w500">Inquiry Type</h5></label>
                        <select class="contact_input w_100" id="inquiry" name="inquiry" required>
                            <option value="">Select Inquiry Type</option>
                            <option value="product_inquiry">Product Inquiry</option>
                            <option value="business_deal">Business Deals</option>
                            <option value="complaints_queries">Complaints / Queries</option>
                            <option value="custom_order">Custom Order</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                
                <!-- Contact Method and Company in one row -->
                <div class="form_row w_100 flex gap_xs">
                    <div class="form_field w_50 flex_cl">
                        <label for="contact_method" class="form_label"><h5 class="font_w500">Preferred Contact Method</h5></label>
                        <select class="contact_input w_100" id="contact_method" name="contact_method" required>
                            <option value="">Select Preferred Method</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone Call</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="any">Any</option>
                        </select>
                    </div>
                    <div class="form_field w_50 flex_cl">
                        <label for="company" class="form_label"><h5 class="font_w500">Company Name (Optional)</h5></label>
                        <input class="contact_input w_100" type="text" id="company" name="company" placeholder="Company Name (Optional)">
                    </div>
                </div>
                
                <!-- Message as a single input -->
                <div class="form_field w_100 flex_cl">
                    <label for="message" class="form_label"><h5 class="font_w500">Your Message</h5></label>
                    <textarea class="contact_input w_100" rows="4" id="message" name="message" required placeholder="Your Message Here.."></textarea>
                </div>
                
                <button type="submit" class="form_button w_100 mtop_s"><h4 class="background_cl">Send Inquiry</h4></button>
            </form> 
        </div>
    </section>
    
    <!-- FAQ Section - Keeping as is -->
    <section id="contact_faq" class="faq_section padding_vs padding_s10 bg_light">
        <div class="faq_header w_100 flex_cl">
            <h2 class="black_cl">Frequently Asked Questions</h2>
            <h4 class="font_w400 w_50 mtop_s">Find quick answers to common questions about our products and services.</h4>
        </div>
        
        <div class="faq_container w_100 mtop_m">
            <!-- FAQ Item 1 -->
            <div class="faq_item bradius_s">
                <div class="faq_question flex justify_sb align_c">
                    <h4 class="black_cl">How do I know which essential oil is right for me?</h4>
                    <div class="question_icon flex_c">
                        <i class="ri-add-line"></i>
                    </div>
                </div>
                <div class="faq_answer">
                    <h4 class="font_w400 mtop_s">Each essential oil has unique properties and benefits. We recommend starting with our beginner's guide or contacting our aromatherapy experts who can provide personalized recommendations based on your specific needs and preferences.</h4>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="faq_item bradius_s">
                <div class="faq_question flex justify_sb align_c">
                    <h4 class="black_cl">Are your essential oils safe for direct skin application?</h4>
                    <div class="question_icon flex_c">
                        <i class="ri-add-line"></i>
                    </div>
                </div>
                <div class="faq_answer">
                    <h4 class="font_w400 mtop_s">Most essential oils should be diluted with a carrier oil before applying to the skin. We provide dilution guidelines with each product and recommend performing a patch test before full application.</h4>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="faq_item bradius_s">
                <div class="faq_question flex justify_sb align_c">
                    <h4 class="black_cl">Do you offer international shipping?</h4>
                    <div class="question_icon flex_c">
                        <i class="ri-add-line"></i>
                    </div>
                </div>
                <div class="faq_answer">
                    <h4 class="font_w400 mtop_s">Yes, we ship to most countries worldwide. Shipping rates and delivery times vary by location. You can view specific shipping information during checkout or contact our customer service team for details.</h4>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="faq_item bradius_s">
                <div class="faq_question flex justify_sb align_c">
                    <h4 class="black_cl">What is your return policy?</h4>
                    <div class="question_icon flex_c">
                        <i class="ri-add-line"></i>
                    </div>
                </div>
                <div class="faq_answer">
                    <h4 class="font_w400 mtop_s">We offer a 30-day satisfaction guarantee. If you're not completely satisfied with your purchase, you can return unopened products for a full refund or exchange. Please contact our customer service team to initiate the return process.</h4>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection