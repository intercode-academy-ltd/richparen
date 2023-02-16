<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('slug')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.png')}}">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="scroll-progress primary-bg"></div>
<!-- Start Preloader -->
<div class="preloader text-center">
    <div class="circle"></div>
</div>
<!--Offcanvas sidebar-->
@include('includes.sidebar')
<!-- Start Header -->
@include('includes.header')
<!--Start search form-->
@include('includes.search')
<!-- Start Main content -->
@yield('content')
<!--site-bottom-->
<!-- Footer Start-->
@include('includes.footer')
<!-- End Footer -->
<div class="dark-mark"></div>
<!-- Vendor JS-->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
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
<!-- NewsBoard JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('scripts')
</body>
</html>
