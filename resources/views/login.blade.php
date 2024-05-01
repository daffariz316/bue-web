<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Material Design Iconic Font -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/animate/animate.css') }}">
    <!-- Hamburgers -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!-- Animsition -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/animsition/css/animsition.min.css') }}">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Date Range Picker -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/daterangepicker/daterangepicker.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/login/util.css') }}">
    <link rel="stylesheet"href="{{ asset('asset/css/login/main.css') }}">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>
                <form method="POST" action="/login">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div>
                <div class="text-center p-t-50">
                    <a href="{{ url('signup') }}" class="txt1">
                        Don't have an account? Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!-- JavaScript -->
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Animsition -->
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('asset/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Date Range Picker -->
    <script src="{{ asset('asset/js/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('asset/js/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Countdown Timer -->
    <script src="{{ asset('asset/vendor/countdowntime/countdowntime.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
