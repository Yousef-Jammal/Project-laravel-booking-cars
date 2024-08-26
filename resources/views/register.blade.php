<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Sign Up</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Existing styles */
        .form-error {
            color: #dc3545;
            font-size: 0.875rem;
            display: none;
        }

        /* Strength meter */
        .strength-meter {
            height: 8px;
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 4px;
            margin-top: 5px;
            display: none;
        }

        .strength-meter-fill {
            height: 100%;
            border-radius: 4px;
        }

        .weak {
            background-color: red;
        }

        .medium {
            background-color: orange;
        }

        .strong {
            background-color: green;
        }

        /* Enhanced form control borders */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-valid {
            border-color: #28a745;
        }

        .input-block {
            margin-bottom: 1rem;
        }

        /* Enhanced small elements */
        .input-block small {
            font-size: 0.8rem;  /* Slightly larger font for readability */
            color: #838385;       /* Darker color for better contrast */
            font-weight: 500;     /* Medium weight for clarity */
            margin-top: 0.25rem;  /* Maintains spacing */
            display: none;       /* Ensure it’s on its own line */
        }

        .btn-size {
            padding: 0.75rem;
            font-size: 1rem;
        }
    </style>
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
                            <span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home
                        </a>
                    </div>
                    <h1>Sign Up</h1>
                    <p class="account-subtitle">We'll send a confirmation code to your email.</p>

                    <form method="POST" action="{{ route('register') }}" id="registerForm">
                        @csrf

                        <div class="input-block">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="username" class="form-control" placeholder="Enter your username" value="{{ old('name') }}" required>
                            <small>Username should be 3-15 characters and contain only letters and numbers.</small>
                            <div class="form-error" id="usernameError">Username must be between 3 and 15 characters and can only contain letters and numbers.</div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-block">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                            <small>Please enter a valid email address.</small>
                            <div class="form-error" id="emailError">Please enter a valid email address.</div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-block">
                            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" value="{{ old('phone') }}" required>
                            <small>Phone number should be a valid format (e.g., +1234567890).</small>
                            <div class="form-error" id="phoneError">Please enter a valid phone number.</div>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-block">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" name="password" id="password" class="form-control pass-input" placeholder="Enter your password" required>
                                <span class="fas fa-eye-slash toggle-password" aria-hidden="true"></span>
                            </div>
                            <small>Password should be at least 8 characters and include at least one uppercase letter, one number, and one special character.</small>
                            <div class="strength-meter" id="strengthMeter">
                                <div class="strength-meter-fill"></div>
                            </div>
                            <div class="form-error" id="passwordError">Password does not meet the required criteria.</div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-block">
                            <label for="password_confirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <div class="pass-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control pass-input" placeholder="Confirm your password" required>
                            </div>
                            <div class="form-error" id="confirmPasswordError">Passwords do not match.</div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 btn-size mt-1">Sign Up</button>

                        <div class="login-or mt-3"></div>
                        <div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Sign In</a></div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <footer class="log-footer">
        <div class="container-fluid">
            <div class="copyright">
                <p>© 2023 Dreams Rent. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const usernamePattern = /^[a-zA-Z0-9]{3,15}$/;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phonePattern = /^[\d\s\+\-\(\)]{7,}$/;
        const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        const strengthMeter = document.getElementById('strengthMeter');
        const strengthMeterFill = document.querySelector('.strength-meter-fill');

        username.addEventListener('input', function () {
            if (usernamePattern.test(username.value)) {
                username.classList.remove('is-invalid');
                username.classList.add('is-valid');
            } else {
                username.classList.remove('is-valid');
                username.classList.add('is-invalid');
            }
        });

        email.addEventListener('input', function () {
            if (emailPattern.test(email.value)) {
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
            } else {
                email.classList.remove('is-valid');
                email.classList.add('is-invalid');
            }
        });

        phone.addEventListener('input', function () {
            if (phonePattern.test(phone.value)) {
                phone.classList.remove('is-invalid');
                phone.classList.add('is-valid');
            } else {
                phone.classList.remove('is-valid');
                phone.classList.add('is-invalid');
            }
        });

        password.addEventListener('input', function () {
            if (passwordPattern.test(password.value)) {
                password.classList.remove('is-invalid');
                password.classList.add('is-valid');
            } else {
                password.classList.remove('is-valid');
                password.classList.add('is-invalid');
            }

            // Password strength meter logic
            const score = passwordStrength(password.value);
            strengthMeterFill.style.width = score + '%';
            strengthMeterFill.className = 'strength-meter-fill';
            if (score >= 80) {
                strengthMeterFill.classList.add('strong');
            } else if (score >= 50) {
                strengthMeterFill.classList.add('medium');
            } else {
                strengthMeterFill.classList.add('weak');
            }
            strengthMeter.style.display = score ? 'block' : 'none';
        });

        confirmPassword.addEventListener('input', function () {
            if (confirmPassword.value === password.value) {
                confirmPassword.classList.remove('is-invalid');
                confirmPassword.classList.add('is-valid');
            } else {
                confirmPassword.classList.remove('is-valid');
                confirmPassword.classList.add('is-invalid');
            }
        });

        function passwordStrength(password) {
            let score = 0;
            if (password.length >= 8) score += 20;
            if (/[A-Z]/.test(password)) score += 20;
            if (/\d/.test(password)) score += 20;
            if (/[@$!%*?&]/.test(password)) score += 20;
            if (password.length >= 12) score += 20;
            return score;
        }
    });
</script>

</body>
</html>
