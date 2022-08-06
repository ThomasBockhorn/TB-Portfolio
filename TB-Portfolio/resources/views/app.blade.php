<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Thomas Bockhorn web developer portfolio website">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/css/vendor.css') }}">
    <link rel="stylesheet" href="/backend/styles.css">

    <!-- script
    ================================================== -->
    <script type="application/javascript" src="{{ asset('frontend/js/js/modernizr.js') }}"></script>
    <script type="application/javascript" src="{{ asset('frontend/js/js/pace.min.js') }}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!--  Title
    =================================================== -->


    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body id="top">
    @inertia


    <div id="preloader">
        <div id="loader"></div>
    </div>


<!-- Java Script
================================================== -->
<script type="application/javascript" src="{{ asset('frontend/js/js/jquery-2.1.3.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('frontend/js/js/plugins.js') }}"></script>
<script type="application/javascript" src="{{ asset('frontend/js/js/main.js') }}"></script>

</body>

</html>
