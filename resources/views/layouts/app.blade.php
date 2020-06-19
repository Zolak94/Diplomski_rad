<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Title -->
    <title>@yield('naslov')</title>

    {{-- <link rel="stylesheet" type="text/css" href="/select2-4.0.7/dist/css/select2.min.css" />
    <script type="text/javascript" src="/select2-4.0.7/dist/js/select2.min.js"></script>
    <script src="/select2-4.0.7//dist/js/i18n/sr.js"></script>
    
    <link rel="stylesheet" href="/flatpickr/dist/flatpickr.min.css">
    <script src="/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/flatpickr/dist/l10n/sr.js"></script> --}}
    @stack('scripts')
    @stack('styles')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Diplomski
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
        {{-- <div class="container">
            
        </div> --}}
        <div class="container2" id="message">

            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                    style="font-size: 25px;font-weight: 200px;opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @elseif (\Session::has('fail'))
            <div class="alert alert-danger alert-dismissible fade show">
                {!! \Session::get('fail') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                    style="font-size: 25px;font-weight: 200px;opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

        </div>
        <main class="py-4">
            @yield('content')
        </main>
        @yield('content_scripts')
    </div>
</body>
</html>