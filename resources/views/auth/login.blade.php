<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Betler Multipurpose Forms HTML Template">
    <meta name="author" content="Ansonika">
    <title>Betler | Multipurpose Forms HTML Template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form-vendor.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form.css')}}" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div class="container-fluid p-0">
	    <div class="row no-gutters row-height">
	        <div class="col-lg-6 background-image " data-background="url({{asset('assets/images/1280_writing-down-goals_4460x4460.jpg')}})">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <div class="text-left">
	                	<small>Welcome back</small>
	                    <h1>Duis aute irure dolor in reprehenderit in voluptate velit esse.</h1>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
                <div class="text-center pt-5">
                    <img src="{{asset('assets/logo.png')}}" alt="">
                </div>
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <form class="input_style_2" method="post">
	                            <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email_address" id="email_address" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password">Password</label>
	                                <input type="password" name="password" id="password" class="form-control">
	                            </div>
	                            <div class="clearfix mb-3">
	                                <div class="float-left">
	                                    <label class="container_check">Remember Me
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                                <div class="float-right">
	                                    <a id="forgot" href="javascript:void(0);">Forgot Password?</a>
	                                </div>
	                            </div>
	                            <button type="submit" class="btn_1 full-width">Login</button>
	                        </form>
	                        <p class="text-center mt-3 mb-0">Don't have an account? <a href="#0">Sign Up</a></p>
	                        <form class="input_style_2" method="post">
	                            <div id="forgot_pw">
	                                <h4 class="mb-4">Forgot Password</h4>
	                                <div class="form-group">
	                                    <label for="email_forgot">Login email</label>
	                                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
	                                </div>
	                                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
	                                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2021 Quadque Technologies ltd - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('assets/js/common_scripts.js')}}"></script>
	<script src="{{asset('assets/js/common_func.js')}}"></script>
</body>
</html>