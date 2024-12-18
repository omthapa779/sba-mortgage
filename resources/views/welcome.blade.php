@extends('layouts.app')

@section('title', 'SBA Mortgage Solution')
@section('content')
        <section class="hero_section flex flex_justify_sb">
            <div class="hero_contents w_50 flex_column flex_justify_fe">
                <h4 class="hero_load">SBA MORTGAGE SOLUTION</h4>
                <h2  class="hero_load">Your Trusted Partner for Smarter Mortgage Solutions in Australia.</h2>
                <div class="button_holder flex flex_align_center">
                    <a href="{{ url('/calculator') }}" class="hero_load primary_button flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                    <a href="{{ url('/contact') }}" class="hero_load secondary_button flex_center "><h3 class="underline-on-hover">Book a Free Consultation</h3></a>
                </div>
            </div>
            <div class="hero_img w_50 flex_center">
                <video autoplay muted loop>
                    <source src="./images/hero_video.mp4">
                </video>
            </div>
        </section>
        <section class="about_us flexible_container padding_s flex flex_justify_sb">
            <div class="about_us_content w_50 flex_column flex_justify_center">
                <h4 class="small_title" data-aos="fade-up-right">ABOUT US</h4>
                <h2 class="big_title" data-aos="fade-up-right">Why Choose Us?</h2>

                <h4 class="about_description padding_s_right" data-aos="fade-up-right">At SBA Mortgage Solution, we understand that finding the right mortgage is more than just getting a good rate- it's about securing a plan that supports your financial future. With years of experience in the Australian mortgage industry, our team of experts is dedicated to helping you navigate every step of the process, from application to approval. Whether you're buying your first home, investing in property, or refinancing, we're here t make your journey smooth and stress-free.</h4>
                <div class="button_holder half_button flex flex_align_center" data-aos="fade-up-right">
                    <a href="{{ url('/about') }}" class="primary_button about_us_button flex_center"><h3 class="underline-on-hover">Learn More.</h3></a>
                </div>
            </div>
            <div class="about_image w_50 flex flex_align_fe flex_justify_center">
                <img src="./images/SBA.png" alt="owner_photo" data-aos="fade-up">
            </div>
        </section>
      
        <section class="services flexible_container alter_container padding_m_top min_height_100 padding_s flex_column flex_align_center ">
         <h4 class="small_title" data-aos="fade-up-right">OUR SERVICES</h4>
         <h2 class="big_title text_align_c" data-aos="fade-up-right">HOW CAN WE HELP YOU?</h2>
         <div class="service_card_holder full_wh flex flex_wrap margin_s_top padding_m_side flex_justify_center ">
            <div class="service_card" style="background-image: url('https://images.pexels.com/photos/8293651/pexels-photo-8293651.jpeg');">
             <div class="overlay full_wh"></div>
             <div class="service_content_holder full_wh flex_center flex_column padding_m_side">
                <h3>Refinance</h3>
                <h5 class="text_align_c margin_s_top">Looking for a more competitive rate or leverage equity in your existing property to purchase an investment property or to fulfill other personal objectives, we can guide & help you.</h5>
             </div>
             <div class="view_more_button full_wh absolute_position flex_center">
                <h3><a href="{{ url('/services')}}" class="underline-on-hover">Learn More</a></h3>
             </div>
            </div>

            <div class="service_card" style="background-position-y: 40%; background-image: url('https://images.pexels.com/photos/1134857/pexels-photo-1134857.jpeg');">
             <div class="overlay full_wh"></div>
             <div class="service_content_holder full_wh flex_center flex_column padding_m_side">
                <h3>Motor Vehicle Loan</h3>
                <h5 class="text_align_c margin_s_top">Looking to purchase your dream car, work commuter or work UTE? Whatever it is we can help you to get it with most competitive rate, and flexible replayments.</h5>
             </div>
             <div class="view_more_button full_wh absolute_position flex_center">
                <h3><a href="{{ url('/services')}}" class="underline-on-hover">Learn More</a></h3>
             </div>
            </div>
            <div class="service_card" style="background-image: url('https://images.pexels.com/photos/7937317/pexels-photo-7937317.jpeg');">
             <div class="overlay full_wh"></div>
             <div class="service_content_holder full_wh flex_center flex_column padding_m_side">
                <h3>Construction Loan</h3>
                <h5 class="text_align_c margin_s_top">Building your first home or dream home? Whatever it is we can source you the most flexible & competitive rate construction home loan and also provide the detailed information about how construction loan works, what involves, and what to expect, etc</h5>
             </div>
             <div class="view_more_button full_wh absolute_position flex_center">
                <h3><a href="{{ url('/services')}}" class="underline-on-hover">Learn More</a></h3>
             </div>
            </div>
            <div class="service_card" style="background-image: url('https://images.pexels.com/photos/4246234/pexels-photo-4246234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
             <div class="overlay full_wh"></div>
             <div class="view_more_button_alter full_wh absolute_position flex_center">
                <h3><a href="{{ url('/services') }}" class="underline-on-hover">Learn More</a></h3>
             </div>
            </div>
         </div>
        </section>

        <section class="process flexible_container padding_s padding_m_top">
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

        <section class="customer_test flexible_contianer min_height_100 padding_s padding_m_top">
            <h4 class="small_title" data-aos="fade-up-right">Customer Testimonial</h4>
            <div class="title_holder_process flex flex_justify_sb">
                <h2 class="big_title" data-aos="fade-up-right">WHAT THEY SAY ABOUT US?</h2>
                
                <a href="#" class="primary_button process_more flex_center"><h3 class="underline-on-hover">Explore More</h3></a>
            </div>
            <div class="customer_holder margin_s_top flex flex_justify_sb gap_s">
                <div class="customer_card full_wh border_r_s">
                    <div class="image_holder" style="background-image: url('https://images.pexels.com/photos/1040880/pexels-photo-1040880.jpeg')"></div>

                    <h5 class="padding_s ">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptatibus eos quos libero exercitationem error odit quibusdam quia corporis illum voluptas nobis, similique doloribus consequuntur voluptatem. Blanditiis eveniet architecto nostrum?"</h5>
                    <h4 class="padding_s">Rosis Shrestha<br> Sydney, Australia</h4>
                </div>
                <div class="customer_card full_wh border_r_s">
                    <div class="image_holder" style="background-image: url('https://images.pexels.com/photos/18047455/pexels-photo-18047455/free-photo-of-portrait-of-a-young-woman-standing-on-a-balcony.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>

                    <h5 class="padding_s ">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptatibus eos quos libero exercitationem error odit quibusdam quia corporis illum voluptas nobis, similique doloribus consequuntur voluptatem. Blanditiis eveniet architecto nostrum?"</h5>
                    <h4 class="padding_s">Rosis Shrestha<br> Sydney, Australia</h4>
                </div>
                <div class="customer_card full_wh border_r_s">
                    <div class="image_holder" style="background-image: url('https://images.pexels.com/photos/6626903/pexels-photo-6626903.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>

                    <h5 class="padding_s ">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptatibus eos quos libero exercitationem error odit quibusdam quia corporis illum voluptas nobis, similique doloribus consequuntur voluptatem. Blanditiis eveniet architecto nostrum?"</h5>
                    <h4 class="padding_s">Rosis Shrestha<br> Sydney, Australia</h4>
                </div>
                <div class="customer_card full_wh border_r_s">
                    <div class="image_holder" style="background-image: url('https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>

                    <h5 class="padding_s ">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptatibus eos quos libero exercitationem error odit quibusdam quia corporis illum voluptas nobis, similique doloribus consequuntur voluptatem. Blanditiis eveniet architecto nostrum?"</h5>
                    <h4 class="padding_s">Rosis Shrestha<br> Sydney, Australia</h4>
                </div>
            </div>
        </section>

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