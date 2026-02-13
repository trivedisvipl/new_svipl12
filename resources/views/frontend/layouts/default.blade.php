<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Svipl @show</title>

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
     <meta name="title" content="{{ Config::get('settings.title') }}" />
    <meta name="keywords" content="{{ Config::get('settings.metaKeywords') }}" />
    <meta name="description" content="{{ Config::get('settings.metaDescription') }}" />

    <link rel="canonical" href="{!! url()->current() !!}" />
    <meta property="og:title" content="{{ Config::get('settings.title') }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{!! url()->current() !!}"/>
    <meta property="og:image" content="{{ Config::get('settings.imgurl') }}"/>
    <meta property="og:site_name" content="{{ Config::get('settings.sitename') }}"/>
    <meta property="og:description" content="{{ Config::get('settings.metaDescription') }}"/>


  <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="{!! asset('assets/frontend/images/favicon.ico') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/bootstrap.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/frontend/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/owl.theme.default.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/all.min.css') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/animate.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/aos.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/slick.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/font.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/frontend/css/responsive.css') !!}">
     @yield('styles')
</head>
<body>


    @include('frontend.includes.header')


    @yield('content')

    @include('frontend.includes.footer')


    <script src="{!! asset('assets/frontend/js/jquery.min.js') !!}"></script>

    <script src="{!! asset('assets/frontend/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/all.min.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/aos.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/waypoint.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/counter.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/slick.min.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/lazysizes.min.js') !!}"></script>
    <script src="{!! asset('assets/frontend/js/script.js') !!}"></script>
    <script>
        AOS.init();

        $(".close").click(function(){
            $(this).parent().addClass('d-none');
        });
    </script>

    @yield('scripts')
</body>
</html>


