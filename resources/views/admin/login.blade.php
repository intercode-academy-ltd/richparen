<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - WikiBlogger</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.png')}}">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>
<div class="scroll-progress bg-dark"></div>
<main class="mt-100 mb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                    <div class="padding_eight_all bg-white">
                        @include('admin.layouts._message')
                        <form action="{{route('adminLogin')}}" method="post">
                            @csrf
                            <div class="divider-text-center mt-15 mb-15 text-muted">
                                 <span> Admin panel </span>
                            </div>
                            <div class="plr-5-percent">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="email" placeholder="email address">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <a class="text-muted" href="{{route('forgetPassword')}}">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark btn-block" name="login">Log in</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->
<div class="dark-mark"></div>
<!-- Vendor JS-->
<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.ticker.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/vendor/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.theia.sticky.js')}}"></script>
<!-- WikiBlogger JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

