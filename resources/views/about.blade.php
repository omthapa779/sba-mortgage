@extends('layouts.app')

@section('title', 'SBA Mortgage Solution. About')
@section('content')
<section class="about_us_page flexible_container padding_s flex_center flex_column">
    <video autoplay muted loop class="about_video">
        <source src="https://videos.pexels.com/video-files/7578543/uhd_30fps.mp4">
    </video>
    <div class="overlay full_wh"></div>
    <div class="about_page_contents full_wh flex_column flex_center">
        <h1>ABOUT US</h1>
        <h4 class="text_align_c">At SBA Mortgage Solution, we understand that finding the right mortgage is more than just getting a good rate- it's about securing a plan that supports your financial future. With years of experience in the Australian mortgage industry, our team of experts is dedicated to helping you navigate every step of the process, from application to approval. Whether you're buying your first home, investing in property, or refinancing, we're here t make your journey smooth and stress-free.</h4>
    </div>
</section>
<section class="teams flexible_container padding_m_top padding_s flex flex_wrap gap_s">
    <div class="team_right half_wh gap_vertical_l flex_column flex_align_sb">
        <div class="upper_team_right flexible_container ">
            <h2 class="padding_m_right team_title">Meet the Leadership Behind Our Work.</h2>
            <h4>Our Team</h4>
        </div>

        <div class="upper_team_right lower_right_team flexible_container">
            <h4 class="text_weight_400 padding_m_right">Join our team of visionaries and be part of a dynamic community.</h4>
        </div>
    </div>
    <div class="team_left half_wh flex_column gap_vertical_s">
        <div class="team_card full_wh">
           <div class="team_card_holders full_wh flex flex_justify_sb">
            <div class="content_holder w_75 padding_s flex_column flex_justify_center">
                <h3>Bibek Lohani</h3>
                <h5 class="text_weight_400">Owner / Founder</h5>
            </div>
            <div class="image_holder_team" style="background-image: url('{{ asset('./images/team_owner.jpg') }}')"></div>
           </div>  
           <div class="hover_card w_75"></div>      
        </div>
        <div class="team_card full_wh">
           <div class="team_card_holders full_wh flex flex_justify_sb">
            <div class="content_holder w_75 padding_s flex_column flex_justify_center">
                <h3>Brock Berry</h3>
                <h5 class="text_weight_400">Owner / Founder</h5>
            </div>
            <div class="image_holder_team" style="background-image: url('https://images.pexels.com/photos/28859279/pexels-photo-28859279/free-photo-of-stylish-young-man-in-urban-setting-portrait.jpeg')"></div>
           </div>  
           <div class="hover_card w_75"></div>      
        </div>    
    </div>
</section>
@endsection