<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/animate/animate.css') }}">
    <!-- Hamburgers CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!-- Animsition CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/animsition/css/animsition.min.css') }}">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- DateRangePicker CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/daterangepicker/daterangepicker.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/login/util.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/login/main.css') }}">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <span class="login100-form-title p-b-34 p-t-27">
                Signup
            </span>
            <form class="form-register" method="post" action="/signup">
                @csrf
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                    <input class="input100" type="text" name="email" placeholder="email">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit"> Signup</button>
                </div>
            </form>
            <div class="text-center p-t-90">
                <a class="txt1" href="#">
                    Forgot Password?
                </a>
            </div>
            <div class="text-center p-t-50">
                <a href="{{ url('login') }}" class="txt1">
                    Don't have an account? Sign Up
                </a>
            </div>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<!-- JavaScript -->
<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap/js/popper.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('asset/js/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('asset/js/vendor/daterangepicker/daterangepicker.js
