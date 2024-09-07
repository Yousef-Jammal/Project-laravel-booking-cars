@php
$id = Auth::user()->id;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  @yield('admin_style')

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main" style="background-color: #fff">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="{{ asset('/img/logo.svg') }}" class="navbar-brand-img h-100" alt="main_logo">
            {{-- <span class="ms-1 font-weight-bold text-dark">Dreams Rent</span> --}}
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2" style="    background-image: linear-gradient(90deg, rgba(0, 0, 0, 0), #000, rgba(0, 0, 0, 0));}">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark " href="{{ route('admin_index') }}">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">home</span>
              </a>
            </li>
            <li class="nav-item" >  {{-- active bg-gradient-primary --}}
              <a class="nav-link text-dark " href="{{ route('admin_users') }}" style="box-shadow: none !important;">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  {{-- <i class="material-icons opacity-10">table_view</i> --}}
                    <img src="{{ asset('img/my-tables-icon.svg') }}" alt="" style="width: 22px;">
                </div>
                <span class="nav-link-text ms-1 text-dark">Users Table</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark " href="{{ route('admin_cars') }}">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">receipt_long</i>
                </div>
                <span class="nav-link-text ms-1">Cars Table</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark " href="{{ route('admin_companies') }}">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">view_in_ar</i>
                </div>
                <span class="nav-link-text ms-1">Companies Table</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark " href="{{ route('admin_lossers') }}">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">view_in_ar</i>
                  </div>
                  <span class="nav-link-text ms-1">Check Lossers</span>
                </a>
              </li>
            <li class="nav-item mt-3">
              <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark " href="{{ route('admin_profile', $id) }}">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark " href="{{ route('logout') }}">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">login</i>
                </div>
                <span class="nav-link-text ms-1">log out</span>
              </a>
            </li>
          </ul>
        </div>

      </aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('pageName')</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">@yield('pageName')</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                  <li class="nav-item d-flex align-items-center">

                    <a href="{{ route('admin_profile', $id) }}" class="nav-link text-body font-weight-bold px-0">

                      <i class="fa fa-user me-sm-1" style="font-size: large;
                                                            font-size: large;
                                                            width: 30px;
                                                            height: 30px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border-radius: 50%;
                                                            box-shadow: 1px 1px 5px #00000036;
                        "></i>
                      {{-- <span class="d-sm-inline d-none">Sign In</span> --}}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->

@yield('content')
<footer class="footer py-4" style="padding-top:0 !important; padding-bottom: 0 !important">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            Dreams rentals.
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
</main>


  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-dashboard.min.js?v=3.1.0') }}"></script>

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBJC10P65W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZBJC10P65W');
</script>


@yield('chart_js_script')
@yield('admin_scripts')
</body>

</html>








