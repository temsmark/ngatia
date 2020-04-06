<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <title>{{(isset($title)?$title:'')}}</title>
    <!-- Libs CSS -->
    <link href="{{asset('dist/libs/jqvmap/dist/jqvmap.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/selectize/dist/css/selectize.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/fullcalendar/core/main.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/fullcalendar/daygrid/main.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/fullcalendar/timegrid/main.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/fullcalendar/list/main.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/flatpickr/dist/flatpickr.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/libs/nouislider/distribute/nouislider.min.css?1580339009')}}" rel="stylesheet"/>
    <!-- Tabler Core -->
    <link href="{{asset('dist/css/tabler.min.css?1580339009')}}" rel="stylesheet"/>
    <!-- Tabler Plugins -->
    <link href="{{asset('dist/css/tabler-flags.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-payments.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-buttons.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-dark.min.css?1580339009')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-rtl.min.css?1580339009')}}" rel="stylesheet"/>
</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
<div class="flex-fill d-flex flex-column justify-content-center">

    @yield('content')
</div>
<!-- Libs JS -->
<script src="{{asset('dist/libs/jquery/dist/jquery.slim.min.js?1580339009')}}"></script>
<!-- Tabler Core -->
<script src="{{asset('dist/js/tabler.min.js?1580339009')}}"></script>
<script src="{{asset('dist/js/tabler-range-sliders.min.js?1580339009')}}"></script>
@yield('script')
</body>
</html>
