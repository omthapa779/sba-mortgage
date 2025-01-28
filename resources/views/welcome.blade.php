@extends('layouts.app')

@section('title', 'SBA Mortgage Solution')
@section('content')

        <section class="hero_section w_100 h_90vh ">
            <video autoplay muted loop class="hero_video w_100 h_100">
              <source src="{{ asset('./images/hero_video.mp4') }}" type="video/mp4">
            </video>
            <div class="overlay_hero w_100 h_100"></div>
            <div class="hero_contents flex_center flex_column w_100 h_100">
                <h2 class="hero_title text_align_c w_50 h_fc">Your Trusted Partner for Smarter Mortgage Solutions in Australia.</h2>
                <div class="hero_button_holder h_fc margin_s_top flex gap_xs">
                    <a href="/calculator" class="hero_button_main flex_center"><h3 class="flex_center w_100 h_100">Get Started</h3></a>
                    <a href="/contact" class="hero_button_secondary flex_center"><h3 class="flex_center w_100 h_100">Book an Appointment</h3></a>
                </div>
            </div>
        </section>

        <section class="about_us w_100 h_fc padding_m flex flex_justify_sb gap_s">
            <div class="right_about w_100 flex_column flex_justify_center gap_xs">
                <h2 class="text_color_bl">Who are We?</h2>
                <h3 class="text_color_bl text_align_j text_weight_400">At SBA Mortgage Solution, we understand that finding the right mortgage is more than just getting a good rate- it's about securing a plan that supports your financial future. With years of experience in the Australian mortgage industry, our team of experts is dedicated to helping you navigate every step of the process, from application to approval.</h3>

                <div class="stats w_100 h_fc flex flex_justify_sb gap_xs">
                    <div class="happy_customer w_100 flex_center flex_column padding_s">
                        <h3>2000+</h3>
                        <h4>Satisfied Customer</h4>
                    </div>
                    <div class="happy_customer w_100 flex_center flex_column padding_s">
                        <h3>5+</h3>
                        <h4>Years of Experience</h4>
                    </div>
                </div>

                <a href="/about" class="hero_button_secondary flex_center"><h3 class="flex_center w_100 h_100">Learn More.</h3></a>
            </div>
            <div class="left_about w_100 h_fc">
                <img src="{{ asset('./images/SBA.png') }}" class="about_img w_100 h_50">
            </div>
        </section>

        <section class="services_section w_100 h_fc padding_m">
            <h2 class="text_color_bl">Our Services</h2>
            <div class="services_holder w_100 h_fc flex_column margin_s_top gap_s">
                <div class="service_card_holder w_100 h_fc flex flex_justify_sb gap_s">
                    <div class="service_card w_100" style="background-image: url('./images/first_home_buyer.jpg')">
                        <div class="service_overlay w_100 h_100"></div>
                        <div class="service_content_holder padding_m w_100 h_100 flex_column flex_justify_fe">
                            <h3 class="service_title">First Home Buyers</h3>
                            <h5>Navigate the journey to your first home with confidence—expert guidance for your biggest investment and lifelong commitment.</h5>
                        </div>
                    </div>
                    <div class="service_card w_100" style="background-image: url('./images/property_upgrade.jpg')">
                        <div class="service_overlay w_100 h_100"></div>
                        <div class="service_content_holder padding_m w_100 h_100 flex_column flex_justify_fe">
                            <h3 class="service_title">Property Upgrade</h3>
                            <h5>Ready to upgrade your living space? Whether it's more room for your family, a shorter commute, or simply a better fit for your lifestyle, we’ll help you find the perfect property to match your needs</h5>
                        </div>
                    </div>
                </div>
                <div class="service_card_holder w_100 h_fc flex flex_justify_sb gap_s">
                    <div class="service_card w_100" style="background-image: url('./images/refinancing.jpg')">
                        <div class="service_overlay w_100 h_100"></div>
                        <div class="service_content_holder padding_m w_100 h_100 flex_column flex_justify_fe">
                            <h3 class="service_title">Refinancing</h3>
                            <h5>Maximize your home loan's potential with refinancing—better rates, new features, and access to equity tailored to your evolving lifestyle. Let our expert mortgage brokers guide you.</h5>
                        </div>
                    </div>

                    <a href="/services" class="w_100">
                    <div class="service_card w_100" style="background-image: url('./images/services_learn.jpg')">
                        <div class="service_overlay w_100 h_100"></div>
                        <div class="service_content_holder padding_m w_100 h_100 flex_column flex_justify_fe">
                            <h3 class="service_title">Learn More</h3>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="process flexible_container padding_m">
            <h4 class="small_title" data-aos="fade-up-right">OUR PROCESS</h4>
            <div class="title_holder_process flex flex_justify_sb">
                <h2 class="big_title" data-aos="fade-up-right">HOW IT WORKS?</h2>
            </div>
            <div class="process_holder flexible_container flex  flex_justify_sb margin_m_top">
                <div class="process_card flex_column flex_justify_center">
                    <div class="number_sign flexible_container flex  flex_align_center flex_justify_fe gap_m">
                        <h1>1</h1>
                        <h1><i class="ri-arrow-right-fill"></i></h1>
                    </div>
                    <div class="content_process flexible_column padding_l_side">
                        <h3 class="process_title">Initial<br> Consultation</h3>
                        <h5>Start with a free consultation to discuss your needs financial goals, and mortgage options.</h5>
                    </div>
                </div>
                <div class="process_card flex_column flex_justify_center">
                    <div class="number_sign flexible_container flex  flex_align_center flex_justify_fe gap_m">
                        <h1>2</h1>
                        <h1><i class="ri-arrow-right-fill"></i></h1>
                    </div>
                    <div class="content_process flexible_column padding_l_side">
                        <h3 class="process_title">Tailored Mortgage Plan</h3>
                        <h5>We analyze your financial situation to find mortgage solutions that suit your lifestyle and objectives.</h5>
                    </div>
                </div>
                <div class="process_card flex_column flex_justify_center">
                    <div class="number_sign flexible_container flex  flex_align_center flex_justify_fe gap_m">
                        <h1>3</h1>
                        <h1><i class="ri-arrow-right-fill"></i></h1>
                    </div>
                    <div class="content_process flexible_column padding_l_side">
                        <h3 class="process_title">Loan Application and Approval</h3>
                        <h5>We handle the applicaition process, working closely with lenders to steamline approval.</h5>
                    </div>
                </div>
                  <div class="process_card flex_column flex_justify_center">
                    <div class="number_sign flexible_container flex  flex_align_center flex_justify_fe gap_m">
                        <h1>4</h1>
                        <h1><i class="ri-arrow-right-fill" style="opacity: 0;"></i></h1>
                    </div>
                    <div class="content_process flexible_column padding_l_side">
                        <h3 class="process_title">Ongoing Support and Advice</h3>
                        <h5>Start with a free consultation to discuss your needs, financial goals and mortgage options.</h5>
                    </div>
                </div>

            </div>
        </section>


        <iframe src='https://widgets.sociablekit.com/google-reviews/iframe/25515848' frameborder='0' width='100%' height='1000'></iframe>


        <!-- review section -->

        <section class="cta flexible_solution flex_center padding_s" style="background-image: url('https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
           <div class="overlay full_wh"></div>
           <div class="cta_container full_wh flex_column flex_center absolute_position">
            <h2 class="text_align_c">Ready to Make Your<br><span class="alter_text"> Dream Home</span> a Reality?</h2>
            <br>
            <h4 class="text_align_c description">Whether you're just starting your journey or looking to refinance, SBA Mortgage Solution is here to guide you every step of the way. Let's work together to find the mortgage solution that firts your unique needs and goals.</h4>
            <br><a href="{{ url('/contact') }}" class="primary_button process_more flex_center"><h3 class="underline-on-hover">Get Started</h3></a>
           </div>
        </section>

@endsection
