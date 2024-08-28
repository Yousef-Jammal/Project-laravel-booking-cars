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
    <link rel="stylesheet" href="{{ asset('css/fajer.css')}}">

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
                        <a href="{{ route('home_index') }}" class="navbar-brand logo">
                            <img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index-2.html" class="navbar-brand logo-small">
                            <img src="{{ asset('img/logo-small.png') }}" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="{{ route('home_index') }}" class="menu-logo">
                                <img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="active"><a href="{{ route('home_index') }}">Home</a></li>
                            <li class="has-submenu">



                                {{-- <a href="{{ route('allCars') }}">Listings --}}
                                {{-- <i class="fas fa-chevron-down"></i> --}}
                                {{-- </a> --}}
                                {{-- <ul class="submenu">
<li><a href="listing-grid.html">Listing Grid</a></li>
<li><a href="listing-list.html">Listing List</a></li>
<li><a href="listing-details.html">Listing Details</a></li>
</ul> --}}
                            </li>
                            <li>
                                <a href="{{ Route::currentRouteName() === 'home_index' ? '#reviewNavbar' : route('home_index') . '#reviewNavbar' }}">Testimonials</a>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li>
                                <a href="{{ Route::currentRouteName() === 'home_index' ? '#faqNavbar' : route('home_index') . '#faqNavbar' }}">FAQ</a>
                            </li>


                            {{-- <li class="has-submenu"> --}}
                            {{-- <a href="#">Pages <i class="fas fa-chevron-down"></i></a> --}}
                            {{-- <ul class="submenu"> --}}
                            {{-- <li><a href="about-us.html">About Us</a></li> --}}

                            {{-- <li class="has-submenu">
<a href="javascript:void(0);">Authentication</a>
<ul class="submenu">
<li><a href="{{ route('register') }}">Signup</a></li>
                            <li><a href="{{ route('login') }}">Signin</a></li>

                            </li> --}}
                            {{-- <li class="has-submenu">
<a href="javascript:void(0);">Booking</a>
<ul class="submenu">
<li><a href="/booking_c">Booking Checkout</a></li>
<li><a href="/booking">Booking</a></li>
</ul>
</li>

<li><a href="/carlist">Pricing</a></li>
<li><a href="/home#frequently" >FAQ</a></li>
<li><a href="/home#testimonials">Testimonials</a></li>
<li><a href="/terms">Terms & Conditions</a></li>
<li><a href="/privacy">Privacy Policy</a></li>  
<li><a href="/coming_soon">Coming Soon</a></li>
</ul>
</li> --}}
                            {{-- <li><a href="pricing.html">Pricing</a></li> --}}
                            {{-- <li><a href="gallery.html">Gallery</a></li> --}}
                            {{-- <li><a href="our-team.html">Our Team</a></li> --}}
                            {{-- <li><a href="terms-condition.html">Terms & Conditions</a></li> --}}
                            {{-- <li><a href="privacy-policy.html">Privacy Policy</a></li> --}}
                            {{-- <li><a href="maintenance.html">Maintenance</a></li> --}}
                            {{-- <li><a href="coming-soon.html">Coming Soon</a></li> --}}
                            {{-- </ul> --}}
                            {{-- </li> --}}
                            {{-- <li class="has-submenu">
<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li> --}}
                            <li class="login-link">
                                <a href="{{ route('register') }}">Sign Up</a>
                            </li>
                            <li class="login-link">
                                <a href="{{ route('login') }}">Sign In</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">

                        @auth
                        @if(Auth::user()->role->name == 'User') {{-- Renter --}}
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('user.user-info') }}">
                                <span><i class="fa-regular fa-user"></i></span> Profile
                            </a>
                        </li>
                        @elseif(Auth::user()->role->name == 'Company') {{-- Company --}}
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('company.dashboard') }}">
                                <span><i class="fa-regular fa-user"></i></span> Dashboard
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link header-reg" href="{{ route('logout') }}"
                                {{-- onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> --}}
                                <span><i class="fa-solid fa-lock"></i></span> Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('login') }}">
                                <span><i class="fa-regular fa-user"></i></span> Sign In
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-reg" href="{{ route('register') }}">
                                <span><i class="fa-solid fa-lock"></i></span> Sign Up
                            </a>
                        </li>
                        @endauth
                        {{-- <li class="nav-item">
<a class="nav-link header-login" href="{{ route('login') }}"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-reg" href="{{ route('register') }}"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')
        <footer class="footer" id="footer">

            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div style="justify-content: space-between;" class="row">
                                <div style="flex: 1;" class="col-lg-4 col-md-6">

                                    <div class="footer-widget footer-menu">
                                        <h5 class="footer-title">About Company</h5>
                                        <p>rusted car rentals made easy. Choose from luxury, sports, or everyday cars with competitive prices and excellent service. Your satisfaction is our priority</p>
                                        {{-- <ul>
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
    </ul> --}}
                                    </div>

                                </div>
                                {{-- <div class="col-lg-4 col-md-6">

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

    </div> --}}
                                <div style="flex: 1;" class="col-lg-4 col-md-6">

                                    <div class="footer-widget footer-menu">
                                        <h5 class="footer-title">Quick links</h5>
                                        <ul>
                                            <li>
                                                @auth
                                                @if(Auth::user()->role->name == 'renter') {{-- Renter --}}
                                            <li class="nav-item">
                                                <a class="nav-link header-login" href="{{ route('user.user-info') }}">
                                                    My Account </a>
                                            </li>
                                            @elseif(Auth::user()->role->name == 'company') {{-- Company --}}
                                            <li class="nav-item">
                                                <a class="nav-link header-login" href="{{ route('company.dashboard') }}">
                                                    My Account</a>
                                            </li>
                                            @endif
                                            @endauth
                                            </li>

                                            <li>
                                                <a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('coming_soon') }}">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('terms') }}">Terms Condition</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('privacy') }}">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact</a>
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
                                            <a href="tel:+1(888)7601940">+962-785532135 Eng : Mo-Khawara</a>
                                        </div>
                                    </div>
                                    <div class="footer-address">
                                        <span><i class="feather-mail"></i></span>
                                        <div class="addr-info">
                                            <a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#daa9afaaaab5a8ae9abfa2bbb7aab6bff4b9b5b7"><span class="__cf_email__" data-cfemail="80f3f5f0f0eff2f4c0e5f8e1edf0ece5aee3efed">Mohamed.Alkhawara@yahoo.com</span></a>
                                        </div>
                                    </div>
                                    <div class="update-form">
                                        {{-- <form id="newsletter-form" action="#">
    <span><i class="feather-mail"></i></span>
    <input type="email" class="form-control" placeholder="Enter You Email Here">
    <button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
    </form> --}}
                                    </div>
                                </div>
                                <div class="footer-social-widget">
                                    <h6>Connect with us</h6>
                                    <ul class="nav-social">
                                        <li>
                                            <a href="{{ route('coming_soon') }}"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                        </li>
                                        <li>
                                            <a href="j{{ route('coming_soon') }}"><i class="fab fa-instagram fi-icon"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('coming_soon') }}"><i class="fab fa-behance fi-icon"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('coming_soon') }}"><i class="fab fa-twitter fi-icon"></i> </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('coming_soon') }}"><i class="fab fa-linkedin fi-icon"></i></a>
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
                                    <p>© 2024 Dreams Rent. All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="copyright-menu">
                                    <div class="vistors-details">
                                        {{-- <ul class="d-flex">
    <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/paypal.svg')}}" alt="Paypal"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/visa.svg ')}}" alt="Visa"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/master.svg')}}" alt="Master"></a></li>
                                        <li><a href="javascript:void(0)"><img class="img-fluid" src="{{ asset('img/icons/applegpay.svg')}}" alt="applegpay"></a></li>
                                        </ul> --}}
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

    <!-- Popup Modal -->
    <div id="thankyouModal" class="AS_popup">
        <div class="AS_popup-content">
            <span class="AS_close-btn">&times;</span>
            <div class="AS_popup-body">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/newsletter-4828216-4019450.png" alt="Paper Airplane" class="AS_popup-image" />
                <h2>Thank You!</h2>
                <p>
                    We appreciate you reaching out.
                    <br />Your email has been confirmed,we will get back to you asap, and you will now receive
                    the latest sales, and exclusive news directly
                    in your inbox. Stay tuned and get ready to level up your looks!
                </p>
                <button class="AS_done-btn">Done</button>
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("thankyouModal");
        var closeBtn = document.getElementsByClassName("AS_close-btn")[0];
        var doneBtn = document.getElementsByClassName("AS_done-btn")[0];

        document.getElementById("newsletter-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = new FormData(this);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../../../../Project-4-Ecommerce-WebsitePHP-MySql/api/newsletter_submit.php", true);
            // true: Indicates that the request should be asynchronous, 
            // the code will continue to run while the request is being processed.

            xhr.onload = function() {
                // if (xhr.status === 200) {
                //     if (xhr.responseText === "success") {
                modal.style.display = "block"; // Show the popup if successful
                //     } else {
                //         alert(xhr.responseText); // Display error message
                //     }
                // } else {
                //     alert("An error occurred during the request.");
                // }
            };

            xhr.send(formData); // Send the form data via AJAX
        });

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        doneBtn.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/my_home_js.js') }}"></script>



    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="92c909a9da2673a89e5fe5b0-text/javascript"></script>

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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZBJC10P65W');
    </script>
</body>

</html>