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
    <title>{{(isset($tittle)?$tittle:'')}}</title>
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
<body class="antialiased">
<div class="page">
    <div class="content">
        <header class="navbar-wrap navbar-expand-lg flex-column">
            <div class="navbar navbar-border navbar-light bg-white">
                <div class="container">
                    <button class="navbar-toggler mr-auto d-lg-none" type="button" data-toggle="collapse"
                            data-target="#nav-main-menu" aria-expanded="false" aria-label="Toggle menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="{{url('/home')}}" class="navbar-brand hide-sidebar-visible m-0">
                        Home
{{--                        <img src="{{asset('static/logo.svg')}}" alt="Tabler" class="navbar-brand-logo">--}}
                    </a>
                    <ul class="nav navbar-menu align-items-center ml-auto">

                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown"
                               class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-reset ml-2"
                               aria-label="Show personal menu">

                      {{ucfirst(Str::words(Auth::User()->name??'',2))}} &nbsp; <span
                                        class="flag flag-country-ke mr-1"></span>
                      <span class="text-muted d-block mt-1 text-h6">{{Auth::user()->roles[0]['name']??''}} </span>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="{{url('profile')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon dropdown-icon">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="icon dropdown-icon">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    Sign out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar navbar-border collapse navbar-collapse navbar-collapse-absolute navbar-light bg-white"
                 id="nav-main-menu">
                <div class="container">
                    <ul class="navbar-nav flex-wrap flex-fill">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">
                    <span class="nav-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                              points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </span>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('acl')}}">
                    <span class="nav-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                           class="icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                              points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </span>
                                Roles and Permissions </a>
                        </li>
                    </ul>
                    <div class="d-none d-xl-block ml-auto">
                        <form action="." method="get">
                            <div class="input-icon">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-page">


            @yield('content')


        </div>
    </div>
</div>
<!-- Libs JS -->
<script src="{{asset('dist/libs/jquery/dist/jquery.slim.min.js?1580339009')}}"></script>
<!-- Tabler Core -->
<script src="{{asset('dist/js/tabler.min.js?1580339009')}}"></script>
<script src="{{asset('dist/js/tabler-range-sliders.min.js?1580339009')}}"></script>
@yield('script')
</body>
</html>
