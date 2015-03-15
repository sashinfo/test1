<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 "> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 "> <![endif]-->
<!--[if gt IE 8]> <html class="ie "> <![endif]-->
<!--[if !IE]><!-->
<html class="">
<!-- <![endif]-->
<head>
    @include('admin.includes.login.header')
</head>
<body class=" loginWrapper">
    <!-- Main Container Fluid -->
    <div class="container-fluid menu-hidden">
        <!-- Content -->
        <div id="content">
            @yield('content')
        </div>
        @include('admin.includes.login.footerscripts')
</body>
</html>