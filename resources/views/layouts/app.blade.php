<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/echarts.js') }}" defer></script>
    <script src="{{ asset('js/air-datepicker.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/air-datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-custom">
                    <img class="header-logo" src="/img/logo.svg" alt="logo">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Мои товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Мои подборки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ozon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wildberries</a>
                            </li>

                        </ul>
                        <div class="my-2 my-lg-0">
                            <button class="analyz-products__btn ">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1.5V4.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 13.5V16.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.69751 3.69749L5.82001 5.81999" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.1799 12.18L14.3024 14.3025" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.5 9H4.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 9H16.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.69751 14.3025L5.82001 12.18" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.1799 5.81999L14.3024 3.69749" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                Анализ товара
                            </button>
                            <img class="avatar-logo" src="/img/unknow.jpg" alt="avatar">
                        </div>

                    </div>
                </nav>
            </div>

        </div>
        <div class="container header-container">
            <div class="row">
                <div class="col-2 header-menu header-menu_first-block">
                    <a href="#" class="header-menu__item with-link">Вернуться назад</a>
                </div>
                <div class="col-6">
                    <div class="header-menu">
                        <a href="/home" class="header-menu__item with-link">Главная</a>

                        <a href="/mpstats/compilation/list" class="header-menu__item with-link">Мои подборки</a>

                        <a href="#" class="header-menu__item">Подборка</a>

                        {{-- <a href="#" class="header-menu__item">Ozon</a>
                        <a href="#" class="header-menu__item">Wildberries</a> --}}
                    </div>

                    {{-- <div class="breadcrumbs">
                        <a href="#" class="breadcrumbs-wrapper">
                            Главная
                        </a>
                        <a href="#" class="breadcrumbs-wrapper">
                            Мои подборки
                        </a href="#">
                        <a href="#" class="breadcrumbs-wrapper">
                            Подборка 1
                        </a>
                        <a href="#" class="breadcrumbs-wrapper">
                            Товар 1
                        </a>
                    </div> --}}
                </div>
                <!-- <div class="col-4">
                    <div class="left-block_wrapper">
                        {{-- <div class="btn-wrapper">
                            <input class="custom-btn" type="button" name="" value="Проанализировать товар">
                        </div> --}}
                        {{-- <div class="user-block">
                            <div class="user-block__foto">
                                <img src="img/avatar.png" alt="avatar">
                            </div>
                            <a href="#" class="user-block__name">
                                Username
                            </a>
                        </div> --}}
                    </div>
                </div> -->
            </div>
        </div>

        @yield('content')

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<!-- <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
    {{-- <img class="header-logo" src="img/logo-header.png" alt="logo"> --}}
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav me-auto">

        </ul>

        
        <ul class="navbar-nav ms-auto">
    
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div> -->