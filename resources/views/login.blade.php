<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="main-wrapper login-body">
        <header class="log-header">
            <a href="{{ route('home_index') }}"><img class="img-fluid logo-dark" src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
        </header>

        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <div class="sign-group">
                            <a href="{{ route('home_index') }}" class="btn sign-up">
                                <span><i class="feather-corner-down-left" aria-hidden="true"></i></span> Back To Home
                            </a>
                        </div>
                        <h1>Sign In</h1>
                        <p class="account-subtitle">Sign in to your account</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-block">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus autocomplete="email">
                            </div>

                            <div class="input-block">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input" placeholder="Password" required autocomplete="off">
                                    <span class="fas fa-eye-slash toggle-password" aria-label="Toggle password visibility"></span>
                                </div>
                            </div>

                            <div class="input-block m-0">
                                <label class="custom_check d-inline-flex"><span>Remember me</span>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</button>

                            <div class="login-or"></div>

                            <div class="text-center dont-have">Don't have an account yet? <a href="{{ route('register') }}">Register</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="log-footer">
            <div class="container-fluid">
                <div class="copyright">
                    <div class="copyright-text">
                        <p>© 2023 Dreams Rent. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
