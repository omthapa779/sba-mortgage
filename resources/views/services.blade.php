@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Services')
@section('content')
<section class="services flexible_container padding_s">
    <h4>OUR SERVICES</h4>
    <h2>HOW CAN WE HELP YOU?</h2>

    <div class="services_page_holder gap_s padding_s_top flexible_container flex flex_wrap flex_justify_sb">
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">01</h1>
            <h3 class="text_color_bl">Refinance</h3>
            <h4 class="text_color_bl">Looking for a more competitive rate or leverage equity in your existing property to purchase an investment property or to fulfill other personal objectives, We can guide & help you.</h4>
        </div>
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">02</h1>
            <h3 class="text_color_bl">SMSF</h3>
            <h4 class="text_color_bl">Why wait till you retire to use your super money? You can use an investment property ask us how?</h4>
        </div>
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">03</h1>
            <h3 class="text_color_bl">Motor vehicle</h3>
            <h4 class="text_color_bl">Looking to purchase your dream car, work commuter or work UTE? Whatever it is we can help you to get it with most competitive rate, and flexible repayments.</h4>
        </div>
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">04</h1>
            <h3 class="text_color_bl">Construction Loan</h3>
            <h4 class="text_color_bl">Building your first home or dream home? Whatever it is we can source you the most flexible & competitive rate construction home loan and also provide the detailed information about how construction loans works, what involves, and what to expect etc.</h4>
        </div>
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">05</h1>
            <h3 class="text_color_bl">Refinance</h3>
            <h4 class="text_color_bl">Looking for a more competitive rate or leverage equity in your existing property to purchase an investment property or to fulfill other personal objectives, We can guide & help you.</h4>
        </div>
        <div class="service_card_page border_r_s padding_s flex_column gap_vertical_m">
            <h1 class="text_color_al">06</h1>
            <h3 class="text_color_bl">Refinance</h3>
            <h4 class="text_color_bl">Looking for a more competitive rate or leverage equity in your existing property to purchase an investment property or to fulfill other personal objectives, We can guide & help you.</h4>
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