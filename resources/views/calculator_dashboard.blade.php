@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. Calculator')
@section('content')
<section class="calculators flexible_container flex_center flex_column">
    <h2 class="text_align_c padding_l_side padding_l_top">Explore Our Mortgage and Financial Calculators</h2>
    <br>
    <h4 class="text_align_c padding_l_side"> Our suite of calculators is designed to help you make informed financial decisions with ease and accuracy. Whether you’re calculating mortgage payments, loan affordability, or investment returns, we have a tool to meet your needs.</h4>

    <div class="flexible_container margin_s_top flex gap_s flex_wrap padding_m_top ">
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.wemakescholars.com/uploads/blog/Education%20Loan%20Repayment%20Overview.jpg')"></div>
                    <h3 class=" padding_s">Loan Repayment Calculator</h3>
                    <h5 class="padding_s_side">Calculate Loan Repayments Quickly and Plan Your Dream Home with Confidence.</h5>
                    <a href="{{ url('/calculator/loan_repayment') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card  full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://static.vecteezy.com/system/resources/previews/012/976/094/non_2x/the-word-stamp-duty-written-on-notepad-on-wooden-background-free-photo.jpg')"></div>
                    <h3 class=" padding_s">Stamp Duty Calculator</h3>
                    <h5 class="padding_s_side">Estimate Your Stamp Duty Fees Instantly and Make Smarter Property Buying Decisions.</h5>
                    <a href="{{ url('/calculator/stamp_duty') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://images.pexels.com/photos/11618875/pexels-photo-11618875.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
                    <h3 class=" padding_s">Saving Goals Calculator</h3>
                    <h5 class="padding_s_side"> Plan Your Savings Effectively and Reach Your Financial Goals Faster with Confidence.</h5>
                    <a href="{{ url('/calculator/saving_goals') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://img.freepik.com/free-vector/calculator-with-number-financial-deal-confirming-with-handshake-calculating-operation-audit-venture-capital-economical-partnership-vector-isolated-concept-metaphor-illustration_335657-2157.jpg?t=st=1734493152~exp=1734496752~hmac=f9e016271ebc3ff65c99ed0d449270a12b172e63fab3182e457c8097ad723598&w=740')"></div>
                    <h3 class=" padding_s">Extra Repayment Calculator</h3>
                    <h5 class="padding_s_side">See How Extra Repayments Can Save You Money and Shorten Your Loan Term.</h5>
                    <a href="{{ url('/calculator/extra_repayment') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.thetimes.com/money-mentor/wp-content/uploads/2021/06/Mortgages.jpg?quality=75&strip=all&w=1900&w=1200')"></div>
                    <h3 class=" padding_s">Offset Calculator</h3>
                    <h5 class="padding_s_side">Discover How an Offset Account Can Reduce Interest and Save on Your Home Loan.</h5>
                    <a href="{{ url('/calculator/offset_calc') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.moneysolver.org/wp-content/uploads/2023/06/time-is-running-out-1.jpg')"></div>
                    <h3 class=" padding_s">How Long to Repay Calculator</h3>
                    <h5 class="padding_s_side">Find Out How Long It Will Take to Repay Your Loan and Achieve Financial Freedom.</h5>
                    <a href="{{ url('/calculator/how_long_calc') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://wayne.bank/wp-content/uploads/2023/04/recha-oktaviani-h2aDKwigQeA-unsplash-scaled-e1680449954324.jpeg')"></div>
                    <h3 class=" padding_s">Loan Comparision Calculator</h3>
                    <h5 class="padding_s_side">Compare Loan Options Side by Side to Choose the Best Fit for Your Needs.</h5>
                    <a href="{{ url('/calculator/loan_compare') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://hemanthassociates.com/wp-content/uploads/2022/02/real-estate-homeownership-homebuying-6688945-1024x682.jpg')"></div>
                    <h3 class=" padding_s">Property Buying Cost Calculator</h3>
                    <h5 class="padding_s_side">Estimate the Total Costs of Buying a Property and Plan Your Budget Effectively.</h5>
                    <a href="{{ url('/calculator/property_buying') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://ativa.com/wp-content/uploads/2023/10/IMG_RentBuy.jpg')"></div>
                    <h3 class=" padding_s">Rent VS Buying Calculator</h3>
                    <h5 class="padding_s_side">Compare Renting vs. Buying to Discover the Best Option for Your Lifestyle and Budget.</h5>
                    <a href="{{ url('/calculator/rentVsBuying') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.yourmortgage.com.au/contentAsset/image/18916a4a-a14e-4392-a8b9-06f9d08492fb/articleTeaserImage/filter/WebP/webp_q/50/monthly-fortnightly-weekly.jpg')"></div>
                    <h3 class=" padding_s">Fortnightly Repayment Calculator</h3>
                    <h5 class="padding_s_side">Calculate Your Fortnightly Repayments and Manage Your Loan with Precision.</h5>
                    <a href="{{ url('/calculator/fortnightly_repay') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
                <div class="calc_card full_wh border_r_s">
                    <div class="image_holder border_r_s calc_image" style="background-image: url('https://www.westpac.com.au/content/dam/public/wbc/images/personal/home-loans/wbc-clp_secure-other-tools-and-calculators-356x200%20(1).jpg')"></div>
                    <h3 class=" padding_s">Borrowing Power Calculator</h3>
                    <h5 class="padding_s_side">Discover Your Borrowing Power and Plan Your Next Property Investment with Ease.</h5>
                    <a href="{{ url('/calculator/borrowing_power') }}" class="calc_button margin_s_bottom margin_s_top margin_s_side_left calc_link primary_button process_more flex_center "><h3 class="underline-on-hover">Get Started</h3></a>
                </div>
            </div>
</section>
@endsection