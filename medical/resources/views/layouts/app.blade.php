<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm" style="background-color: #800000;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logo_telkomedika.png') }}" style="width: 60px;" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mx-auto pl-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <span> <b style="color:#EB4880; font-size: 20px;">Artikel</b> </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/konsultasi">
                                <span> <b style="color:#EB4880; font-size: 20px;">Tanya Dokter</b> </span>
                            </a>
                        </li> -->
                    <!-- 
                    @auth

                    @if(auth()->user()->role=='admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <span> <b style="color:#EB4880; font-size: 20px;">Dashboard</b> </span>
                        </a>
                    </li>

                    @elseif(auth()->user()->role=='pasien')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/datakonsultasi') }}">
                            <span> <b style="color:#EB4880; font-size: 20px;">Data Konsultasi</b> </span>
                        </a>
                    </li>
                    @elseif(auth()->user()->role=='dokter')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <span> <b style="color:#EB4880; font-size: 20px;">Dashboard</b> </span>
                        </a>
                    </li>
                    @endif
                    @endauth
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;" href="/">{{ __('Home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;"
                                href="/konsultasi">{{ __('Tanya Dokter') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;"
                                href="/artikelhome">{{ __('Artikel') }}</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;"
                                href="/register">{{ __('Profil') }}</a>
                        </li>
                         @endguest

                        @auth
                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;"
                                href="/profil/{{ auth()->user()->id }}/detailprofil">{{ __('Profil') }}</a>
                        </li>
                        @endauth

                        @guest
                        <!-- <li class="nav-item">
                            <a class="nav-link" style="color:#EB4880; font-size: 20px;"
                                href="{{ route('login') }}">{{ __('') }}</a>
                        </li> -->
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="color:whitesmoke; font-size: 16px;"
                                href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        </li>
                        @endif

                        
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                style="color:whitesmoke; font-size: 16px;" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <a class="dropdown-item" href="/datakonsultasi" >
                                    {{ __('Data Konsul') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>