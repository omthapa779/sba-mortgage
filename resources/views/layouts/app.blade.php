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
                <h3><a onclick="menu_open()" class="extend_menu" style="cursor: pointer; "><i class="ri-menu-line"></i> Menu</a></h3>
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
                    <a href="{{ url('/blogs') }}" class="underline-on-hover"><h4>Blogs</h4></a>
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

    <div class="menu_extended">
      <div class="close-button" onclick="menu_close()">
      <h3><i class="ri-close-line"></i>
        Close</h3>
      </div>

    <div class="nav-container">
        <!-- Left Section: Quick Links -->
        <div class="nav-section">
            <div class="nav-header">
                <h2 class="white_cl">Quick Links</h2>
            </div>
            
            <div class="nav-links-grid">
                <a href="/" class="nav-card">
                    <h4><i class="ri-home-line"></i><br>
                    <span>Home</span></h4></h4>
                </a>
                <a href="/about" class="nav-card">
                    <h4><i class="ri-information-line"></i><br>
                    <span>About</span></h4>
                </a>
                <a href="/services" class="nav-card">
                    <h4><i class="ri-service-line"></i><br>
                    <span>Services</span></h4>
                </a>
                <a href="/blogs" class="nav-card">
                    <h4><i class="ri-article-line"></i><br>
                    <span>Blogs</span></h4>
                </a>
                <a href="/calculator" class="nav-card">
                    <h4><i class="ri-calculator-line"></i><br>
                    <span>Calculators</span></h4>
                </a>
                <a href="/contact" class="nav-card">
                    <h4><i class="ri-contacts-line"></i><br>
                    <span>Contact</span></h4>
                </a>
            </div>
        </div>

        <!-- Right Section: Calculators -->
        <div class="nav-section">
            <div class="nav-header">
                <h2 class="white_cl">Calculators</h2>
            </div>
            
            <div class="calc-links-grid">
                <a href="/calculator/loan_repayment" class="calc-card">
                    <h4><i class="ri-money-dollar-circle-line"></i><br>
                    <span>Loan Repayment</span></h4>
                </a>
                <a href="/calculator/stamp_duty" class="calc-card">
                    <h4><i class="ri-file-list-3-line"></i><br>
                    <span>Stamp Duty</span></h4>
                </a>
                <a href="/calculator/saving_goals" class="calc-card">
                    <h4><i class="ri-money-dollar-box-line"></i><br>
                    <span>Saving Goals</span></h4>
                </a>
                <a href="/calculator/extra_repayment" class="calc-card">
                    <h4><i class="ri-funds-line"></i><br>
                    <span>Extra Repayment</span></h4>
                </a>
                <a href="/calculator/offset_calc" class="calc-card">
                    <h4><i class="ri-exchange-funds-line"></i><br>
                    <span>Offset</span></h4>
                </a>
                <a href="/calculator/how_long_calc" class="calc-card">
                    <h4><i class="ri-timer-line"></i><br>
                    <span>How Long to Repay</span></h4>
                </a>
                <a href="/calculator/loan_compare" class="calc-card">
                    <h4><i class="ri-scales-line"></i><br>
                    <span>Loan Comparison</span></h4>
                </a>
                <a href="/calculator/property_buying" class="calc-card">
                    <h4><i class="ri-home-gear-line"></i><br>
                    <span>Property Buying Cost</span></h4>
                </a>
                <a href="/calculator/rentVsBuying" class="calc-card">
                    <h4><i class="ri-contrast-2-line"></i><br>
                    <span>Rent VS Buying</span></h4>
                </a>
                <a href="/calculator/fortnightly_repay" class="calc-card">
                    <h4><i class="ri-calendar-2-line"></i><br>
                    <span>Fortnightly Repayment</span></h4>
                </a>
            </div>
        </div>
    </div>

    <div class="brand-footer">
        <h2>SBA MORTGAGE SOLUTION</h2>
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