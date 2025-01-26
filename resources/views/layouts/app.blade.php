<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SBA Mortgage Solution')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/specifics.css')}}"> 
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <div class="flexible_container main_container padding_s_bottom">
        <nav class="navbar flex_justify_sb flex flex_align_center">
            <img src="{{asset('./images/logo.png')}}" alt="logo">

            <div class="content flex flex_align_center">
                <h3><a onclick="menu_extended()" class="extend_menu" style="cursor: pointer; "><i class="ri-menu-line"></i> Menu</a></h3>
            </div>
        </nav>

        @yield('content')

        <footer class="flexible_container padding_l_top  padding_m_side">
            <div class="footer_holder flex padding_m_top flex_justify_sb">
                <div class="first_holder_footer footer_card flex_column gap_vertical_s">
                    <h4>Quick Links</h4>
                    <a href="{{ url('/') }}" class="underline-on-hover"><h4>Home</h4></a>
                    <a href="{{ url('/about') }}" class="underline-on-hover"><h4>About Us</h4></a>
                    <a href="{{ url('/services') }}" class="underline-on-hover"><h4>Our Services</h4></a>
                    <a href="{{ url('/calculator') }}" class="underline-on-hover"><h4>Calculators</h4></a>
                    <a href="{{ url('/contact') }}" class="underline-on-hover"><h4>Contact</h4></a>
                </div>
                <div class="second_holder_footer footer_card flex_column gap_vertical_s">
                <h4>Contact</h4>
                    <a href="#" class="underline-on-hover"><h4>bibek@sbamortgagesolution.com.au</h4></a>
                    <a href="#" class="underline-on-hover"><h4>0401 878 450</h4></a>
                    <a href="#" class="underline-on-hover"><h4>20 Wallabalooa St, Ngunnawal Canberra, ACT 2913</h4></a>
                </div>
                <div class="third_holder_footer footer_card flex_column flex_justify_center gap_vertical_s">
                   <a href="#" class="underline-on-hover"><h3><i class="ri-facebook-box-fill"></i></h3></a>
                   <a href="#" class="underline-on-hover"><h3><i class="ri-instagram-fill"></i></h3></a>
                   <a href="#" class="underline-on-hover"><h3><i class="ri-tiktok-fill"></i></h3></a>
                </div>
            </div>

            <h1 class="footer_title_large">SBA MORTGAGE <br> SOLUTION</h1> 
       
        </footer>
    </div>
    <div class="loading flexible_container flex_center flex_column">
        <h2 class="loading_title"><span>SBA</span>
        <span> Mortgage</span>
        <span> Solution</span></h2>

        <div class="loading_holder">
            <div class="loading_bar full_wh"></div>
        </div>
    </div>

    <div class="menu_extended  flex_column padding_m">
        <div class="close_button_holder h_fc flex flex_justify_fe">
            <div class="content flex flex_align_center">
                <h3><a onclick="menu_close()" class="extend_menu" style="cursor: pointer; "><i class="ri-close-line"></i> Close</a></h3>
            </div>
        </div>
      <div class="menu_links_holder w_100 h_100 flex flex_justify_sb gap_s ">
        <div class="menu_divs w_100 h_100 flex_column flex_justify_sb">
            <div class="menu_links flex_column">
                <h2 class="text_color_al">Quick Links</h2><br>
                <h3><a href="/" class="nav_content">Home</a></h3>
                <h3><a href="/about" class="nav_content">About</a></h3>
                <h3><a href="/services" class="nav_content">Services</a></h3>
                <h3><a href="/calculator" class="nav_content">Calculators</a></h3>
                <h3><a href="/contact" class="nav_content">Contact</a></h3>
            </div>

            <h2 class="white_cl">SBA MORTGAGE SOLUTION</h2>
        </div>
        <div class="menu_divs w_100 h_100 flex_column ">
            <div class="menu_links flex_column">
                <h2 class="text_color_al">Calculators</h2><br>
                <h3><a href="/" class="nav_content">Loan Repayment</a></h3>
                <h3><a href="/" class="nav_content">Stamp Duty</a></h3>
                <h3><a href="/" class="nav_content">Saving Goals</a></h3>
                <h3><a href="/" class="nav_content">Extra Repayment</a></h3>
                <h3><a href="/" class="nav_content">Offset</a></h3>
                <h3><a href="/" class="nav_content">How Long to Repay</a></h3>
                <h3><a href="/" class="nav_content">Loan Comparision</a></h3>
                <h3><a href="/" class="nav_content">Property Buying Cost</a></h3>
                <h3><a href="/" class="nav_content">Rent VS Buying</a></h3>
                <h3><a href="/" class="nav_content">Fortnightly Repayment</a></h3>
                <h3><a href="/" class="nav_content">Borrowing Power</a></h3>
            </div>
        </div>
        <div class="menu_divs w_100 h_100 flex_column flex_justify_sb">
        <div class="menu_links flex_column">
                <h2 class="text_color_al">Recent Blogs</h2><br>
                <h3><a href="/" class="nav_content">Home</a></h3>
                <h3><a href="/about" class="nav_content">About</a></h3>
                <h3><a href="/services" class="nav_content">Services</a></h3>
                <h3><a href="/calculator" class="nav_content">Calculators</a></h3>
                <h3><a href="/contact" class="nav_content">Contact</a></h3>
            </div>

            <h2 class="white_cl">Site Built by Tilasmi</h2>
        </div>
      </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js"></script> 
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
     document.addEventListener('DOMContentLoaded', function() {
        AOS.init({});
    });
  </script>
<script src="../logics/logic.js"></script>
<script src="../logics/animations.js"></script>
</body>
</html>