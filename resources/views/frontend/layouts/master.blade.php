<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>{{ setting('site.title') }} | @yield('title')</title>
    <link rel="icon" href="{{ asset('frontend/asset/img/favicon.jpg') }}" type="image/gif">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/menumaker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/responsive.css') }}">
    <style>
        .single-project {
            margin-bottom: 20px;
        }

        .single-project .project-thumb img {
            height: 165px;
        }

        .admin-link {
            color: #0431B4!important;
        }
    </style>
</head>

<body class="js">
    <div id="preloader"></div>
    <!-- start header section -->
    @include('frontend.layouts._header')
    <!-- end header section -->
    
    @yield('content')
    
    <!-- start footer section -->
    @include('frontend.layouts._footer')
    <!-- end of footer section -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('frontend/asset/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/slider.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/menu.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/active.js') }}"></script>
    <!-- end of copyright section -->
</body>

</html>
