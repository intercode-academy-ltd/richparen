<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <meta name="csrf-token" {{ csrf_token() }}>
    <title>@yield('title')</title>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        @yield('content-admin')
    </div>
    @include('admin.layouts.footer')
</div>
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
