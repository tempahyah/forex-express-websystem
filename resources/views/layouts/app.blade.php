<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'ForexExpress') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom_file.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footercss.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contact-page.css') }}" rel="stylesheet">


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        {{--  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  --}}
        
</head>
<body id="page-container">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://lh3.googleusercontent.com/birUkcYfJ99k9YifIijq4lJnBgKMKh5Y7Qa04rx5pSKJel8Y3c9jFlMVQV_qsGgefkjarFIIccjMr7VBi3aBPN0tdJJuhonCQtJmZKb-ux30qzb-7XZBFgYbMX1jsM0QziJwuBDzs87o0LdZaJLdFqT-qGwQT5zkObq7EpM-oK-vx24Bqy1QCeWKqUZ0HBEfSi4rl9ZcS516740heaKohSPrTzfeD_ZKhJl1NecbbqiarlI0VymsjDsOViTFkxlKstXZPeDrcyMoF7-o2VQxX0lig8MRr_M7ubKVQf9DMGT-_H4StX7f8hI_xz21TC37NdjH2_LilF8t-Y2SPpDi8MiiXnwjpqI6TOlk21EVm13BWKKSn8y654QN_bJ3uJf_LcQjRBDxjZ_HcXF6y0TJNaS5DO38e48i5dEcsfseJgxeUlTdPROcUlmVIxXL_kal26wAXKCCLnnrgTSmeXFjUsJ0Q7uvwugv958bT6BpMVJkOU_MCAUVuW8yLiP58j7ePnXmuuC0ZezX-ImzfVe9UFpPH54IUIgiKhhfo1iCf5taNF08udoSWRnFIUnKA3A2VRRuFd5lKAb-6vX-1hud3Hxy9yGTuhIW6GuywhCS4IiOAghn1zZc8Y5E686u6mYK3j1TBz9rqEjES6k28gDgb8nH8hur0zefbk7mw7PwWkjs7axJNqrdwb7d6GveggPAu5QY2nyAYTOxfy7Q3U9HDG-N=w796-h645-no" style="width:25px; height:20px">
                    {{ config('app.name', 'ForexExpress') }}                </a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bureaus.index') }}"><i class="fas fa-building"></i> Bureaus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rates.index') }}"><i class="fas fa-money-check-alt"></i> Rates</a>
                        </li>
                        @if (Auth::user()->role_id==1)
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-briefcase"></i> Super Admin  <span class="caret"></span>
                                </a>
            
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('bureaus.index') }}">All Bureaus</a>
                                    <a class="dropdown-item" href="{{ route('rates.index') }}">Forex</a>
                                    <a class="dropdown-item" href="{{ route('currencies.index') }}">All Currencies</a>
                                    <a class="dropdown-item" href="{{ route('users.index') }}">All Users</a>
                                    <a class="dropdown-item" href="{{ route('roles.index') }}">All Roles</a>
                                    <a class="dropdown-item" href="{{ route('modes.index') }}">All Currency Modes</a>
                                </div>
                            </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
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

                                    <a class="dropdown-item" href="/home">Dashboard</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @include('partials.errors')
        @include('partials.success')
        
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
            <footer id="footer" style="text-align: center"></footer>
            
        </main>
        
   
    </div>
    <div style="height:300px">

    </div>
    @include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/98dc47e44f.js"></script>
</body>
</html>
