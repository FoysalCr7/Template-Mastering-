<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from web.dotthemes.com/html/storola-demo/storola/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 15:45:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- responsive viewport
    ==================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Favicon
    ==================================================================-->
    <link rel="icon" href="{{ asset('/') }}front-end/images/favicon.ico">

    <!-- Google Font
    ==================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Bootstrap css
    ==================================================================-->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/bootstrap.min.css">

    <!-- FontAwesome css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/font-awesome.min.css">

    <!-- MeanManu css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/meanmenu.css">

    <!-- SimpleTicker css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/jquery.simpleTicker.css">

    <!-- Owl Carousel css
    =====================================================================-->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/owl.carousel.min.css">

    <!-- Style css
    ==================================================================== -->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/style.css">

    <!-- Responsive css
    ===================================================================== -->
    <link rel="stylesheet" href="{{ asset('/') }}front-end/css/responsive.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- HEADER START HERE -->
<header class="header-area">
    <!-- Header Top Start -->
@include('front-end.includes.header')
<!-- Header Top End -->
@yield('body')
<!-- USER AREA START -->
@include('front-end.includes.footer')
<!-- PROMO AREA END HERE -->

    <!-- FOOTER AREA START HERE -->

    <!-- FOOER AREA END HERE -->

    <!-- jQuery Min
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/jquery.min.js"></script>

    <!-- Bootstrap Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>

    <!-- Meanmenu Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/jquery.meanmenu.js"></script>

    <!-- Isotope Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/isotope.pkgd.min.js"></script>

    <!-- Steller Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/jquery.stellar.min.js"></script>

    <!-- Simple-sticker Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/jquery.simpleTicker.js"></script>

    <!-- Syotimer Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/jquery.syotimer.min.js"></script>

    <!-- Owl Carosel Js
    ==============================================================-->
    <script src="{{ asset('/') }}front-end/js/owl.carousel.min.js"></script>

    <!-- Custom Js
    ================================================================-->
    <script src="{{ asset('/') }}front-end/js/main.js"></script>
</body>


<!-- Mirrored from web.dotthemes.com/html/storola-demo/storola/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 15:45:24 GMT -->
</html>
