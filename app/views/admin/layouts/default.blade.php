<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-discover"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-discover"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-discover">
<!-- <![endif]-->
<head>
    @include('admin.includes.default.header')
</head>
<body class="">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden">
    @include('admin.includes.default.sidebarmenu')
    <!-- Content -->
    <div id="content">
        @include('admin.includes.default.headermenu')
        <div class="innerLR">
            @yield('content')
        </div>
    </div>
    <!-- // Content END -->
    @include('admin.includes.default.footer')
</div>
<!-- // Main Container Fluid END -->
@include('admin.includes.default.footerscripts')
</body>
</html>