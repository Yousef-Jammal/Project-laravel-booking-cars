
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 09:06:04 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dreams Rent | Template</title>

<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

<link rel="stylesheet" href="{{asset('css/my_home_style.css')}}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{ asset('plugins/aos/aos.css')}}">

<link rel="stylesheet" href="{{ asset('css/feather.css')}}">

<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{ asset('css/style.css')}}">

<link rel="stylesheet" href="{{ asset('css/Aseelstyle.css')}}">

</head>
<body>
<div class="main-wrapper">

<header class="header">
<div class="container-fluid">
<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="index-2.html" class="navbar-brand logo">
<img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="Logo">
</a>
<a href="index-2.html" class="navbar-brand logo-small">
<img src="{{ asset('img/logo-small.png') }}" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="index-2.html" class="menu-logo">
<img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
</div>
<ul class="main-nav">
<li class="active"><a href="index-2.html">Home</a></li>
<li class="has-submenu">
<a href="#">Listings <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="listing-grid.html">Listing Grid</a></li>
<li><a href="listing-list.html">Listing List</a></li>
<li><a href="listing-details.html">Listing Details</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="about-us.html">About Us</a></li>
<li class="has-submenu">
<a href="javascript:void(0);">Authentication</a>
<ul class="submenu">
<li><a href="register.html">Signup</a></li>
<li><a href="login.html">Signin</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="reset-password.html">Reset Password</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Booking</a>
<ul class="submenu">
<li><a href="booking-payment.html">Booking Checkout</a></li>
<li><a href="booking.html">Booking</a></li>
<li><a href="invoice-details.html">Invoice Details</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Error Page</a>
<ul class="submenu">
<li><a href="error-404.html">404 Error</a></li>
<li><a href="error-500.html">500 Error</a></li>
</ul>
</li>
<li><a href="pricing.html">Pricing</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="our-team.html">Our Team</a></li>
<li><a href="testimonial.html">Testimonials</a></li>
<li><a href="terms-condition.html">Terms & Conditions</a></li>
<li><a href="privacy-policy.html">Privacy Policy</a></li>
<li><a href="maintenance.html">Maintenance</a></li>
<li><a href="coming-soon.html">Coming Soon</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li>
<li><a href="contact-us.html">Contact</a></li>
<li class="login-link">
<a href="register.html">Sign Up</a>
</li>
<li class="login-link">
<a href="login.html">Sign In</a>
</li>
</ul>
</div>
<ul class="nav header-navbar-rht">
<li class="nav-item">
<a class="nav-link header-login" href="login.html"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
</li>
<li class="nav-item">
<a class="nav-link header-reg" href="register.html"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
</li>
</ul>
</nav>
</div>
</header>

@yield('content')
<footer class="footer">

    <div class="footer-top aos" data-aos="fade-up">
    <div class="container">
    <div class="row">
    <div class="col-lg-7">
    <div class="row">
    <div class="col-lg-4 col-md-6">

    <div class="footer-widget footer-menu">
    <h5 class="footer-title">About Company</h5>
    <ul>
    <li>
    <a href="about.html">Our Company</a>
    </li>
    <li>
    <a href="javascript:void(0)">Shop Toyota</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrentals USA</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrentals Worldwide</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrentals Racing</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrentals Racing</a>
    </li>
    <li>
    <a href="javascript:void(0)">Virtual Auto Show</a>
    </li>
    </ul>
    </div>

    </div>
    <div class="col-lg-4 col-md-6">

    <div class="footer-widget footer-menu">
    <h5 class="footer-title">Vehicles Type</h5>
    <ul>
    <li>
    <a href="javascript:void(0)">All Vehicles</a>
    </li>
    <li>
    <a href="javascript:void(0)">SUVs</a>
    </li>
    <li>
    <a href="javascript:void(0)">Trucks</a>
    </li>
    <li>
    <a href="javascript:void(0)">Cars</a>
    </li>
    <li>
    <a href="javascript:void(0)">Crossovers</a>
    </li>
    <li>
    <a href="javascript:void(0)">Electrified Vehicles</a>
    </li>
    <li>
    <a href="javascript:void(0)">Hybrids</a>
    </li>
    </ul>
    </div>

    </div>
    <div class="col-lg-4 col-md-6">

    <div class="footer-widget footer-menu">
    <h5 class="footer-title">Quick links</h5>
    <ul>
    <li>
    <a href="javascript:void(0)">My Account</a>
    </li>
    <li>
    <a href="javascript:void(0)">Champaigns</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrental Dealers</a>
    </li>
    <li>
    <a href="javascript:void(0)">Deals and Incentive</a>
    </li>
    <li>
    <a href="javascript:void(0)">Financial Services</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrental Insurance</a>
    </li>
    <li>
    <a href="javascript:void(0)">Dreamsrental Care</a>
    </li>
    </ul>
    </div>

    </div>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="footer-contact footer-widget">
    <h5 class="footer-title">Contact Info</h5>
    <div class="footer-contact-info">
    <div class="footer-address">
    <span><i class="feather-phone-call"></i></span>
    <div class="addr-info">
    <a href="tel:+1(888)7601940">+ 1 (888) 760 1940</a>
    </div>
    </div>
    <div class="footer-address">
    <span><i class="feather-mail"></i></span>
    <div class="addr-info">
    <a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#daa9afaaaab5a8ae9abfa2bbb7aab6bff4b9b5b7"><span class="__cf_email__" data-cfemail="80f3f5f0f0eff2f4c0e5f8e1edf0ece5aee3efed">[email&#160;protected]</span></a>
    </div>
    </div>
    <div class="update-form">
    <form action="#">
    <span><i class="feather-mail"></i></span>
    <input type="email" class="form-control" placeholder="Enter You Email Here">
    <button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
    </form>
    </div>
    </div>
    <div class="footer-social-widget">
    <h6>Connect with us</h6>
    <ul class="nav-social">
    <li>
    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
    </li>
    <li>
    <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
    </li>
    <li>
    <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
    </li>
    <li>
    <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
    </li>
    <li>
    <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="footer-bottom">
    <div class="container">

    <div class="copyright">
    <div class="row align-items-center">
    <div class="col-md-6">
    <div class="copyright-text">
    <p>© 2023 Dreams Rent. All Rights Reserved.</p>
    </div>
    </div>
    <div class="col-md-6">

    <div class="copyright-menu">
    <div class="vistors-details">
    <ul class="d-flex">
    <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/paypal.svg" alt') }}="Paypal"></a></li>
    <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/visa.svg" alt') }}="Visa"></a></li>
    <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/master.svg" alt') }}="Master"></a></li>
    <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/applegpay.svg" alt') }}="applegpay"></a></li>
    </ul>
    </div>
    </div>

    </div>
    </div>
    </div>

    </div>
    </div>

    </footer>

    </div>

    <div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
    </div>


    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/my_home_js.js') }}"></script>



    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('js/jquery.waypoints.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('plugins/aos/aos.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('js/backToTop.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('plugins/moment/moment.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>




    <script src="{{ asset('js/script.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>
    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="92c909a9da2673a89e5fe5b0-|49" defer></script>
    @yield('script')
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBJC10P65W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZBJC10P65W');   
</script>
</body>
</html>
