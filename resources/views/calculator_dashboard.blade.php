@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Calculator')
@section('content')
<section class="calculators flexible_container flex_center flex_column">
    <h2 class="text_align_c padding_l_side padding_l_top">Explore Our Mortgage and Financial Calculators</h2>
    <br>
    <h4 class="text_align_c padding_l_side"> Our suite of calculators is designed to help you make informed financial decisions with ease and accuracy. Whether you’re calculating mortgage payments, loan affordability, or investment returns, we have a tool to meet your needs.</h4>

    <div class="flexible_container margin_s_top flex gap_s flex_justify_sb flex_wrap padding_m_top ">
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.wemakescholars.com/uploads/blog/Education%20Loan%20Repayment%20Overview.jpg')"></div>
                    <h3 class=" padding_s">Loan Repayment Calculator</h3>
                    <h5 class="padding_s_side">Calculate Your Loan Repayments Instantly and Plan Your Dream Home with Confidence.</h5>
                    <a href="{{ url('/calculator/loan_repayment') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card  full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://images.pexels.com/photos/7579402/pexels-photo-7579402.jpeg')"></div>
                    <h3 class=" padding_s">Maximum Home Loan Borrowing Calculator</h3>
                    <h5 class="padding_s_side">Estimate how much you can borrow for your dream home with ease and confidence</h5>
                    <a href="{{ url('/contact') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://images.pexels.com/photos/7579402/pexels-photo-7579402.jpeg')"></div>
                    <h3 class=" padding_s">Maximum Home Loan Borrowing Calculator</h3>
                    <h5 class="padding_s_side">Estimate how much you can borrow for your dream home with ease and confidence</h5>
                    <a href="{{ url('/contact') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://images.pexels.com/photos/7579402/pexels-photo-7579402.jpeg')"></div>
                    <h3 class=" padding_s">Maximum Home Loan Borrowing Calculator</h3>
                    <h5 class="padding_s_side">Estimate how much you can borrow for your dream home with ease and confidence</h5>
                    <a href="{{ url('/contact') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://images.pexels.com/photos/7579402/pexels-photo-7579402.jpeg')"></div>
                    <h3 class=" padding_s">Maximum Home Loan Borrowing Calculator</h3>
                    <h5 class="padding_s_side">Estimate how much you can borrow for your dream home with ease and confidence</h5>
                    <a href="{{ url('/contact') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
            </div>
</section>
@endsection