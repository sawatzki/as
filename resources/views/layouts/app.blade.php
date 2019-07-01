<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/as.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.lite.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.lite.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    
    <style>
        .map-container
        {
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe
        {
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                                    <a class="dropdown-item" href="{{ route('user_details', ['user'=>\Illuminate\Support\Facades\Auth::user()]) }}">
                                        User
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @include('layouts.menu')
        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>

    </div>

    <main class="mt-5">
        <div class="container">
    
            <section id="contact">
                
                <h2 class="mb-5 font-weight-bold text center">Contact us</h2>
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        
                        <form class="p-5">
                            
                            <div class="md-form form-sm">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control form-control-sm">
                                <label for="form3">Ihre Name</label>
                            </div>
                            <div class="md-form form-sm">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control form-control-sm">
                                <label for="form2">Ihre Email</label>
                            </div>
                            <div class="md-form form-sm">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control form-control-sm">
                                <label for="form32">Betreff</label>
                            </div>
                            <div class="md-form form-sm">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3"></textarea>
                                <label for="form8">Nachricht</label>
                            </div>
                            <button class="btn btn-primary waves-effect waves-light">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </form>

                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-12 mb-3">
                                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Berlin</p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mo - Fr</p>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+49 157 1234567</p>
                            </div>
                        </div>
                        
                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px">
                          <iframe src="https://maps.google.com/maps?q=52.5168431,13.4768766&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                        </div>
                        <!--Google Maps-->

                    </div>
                </div>

            </section>

    
        </div>
    </main>

    <footer class="page-footer font-small unique-color-dark pt-0">
        <div class="primary-color">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 tet-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Wir in social networks</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a href="#" class="fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-4"></i>
                        </a>
                        <a href="#" class="fb-ic ml-0">
                            <i class="fa fa-twitter white-text mr-4"></i>
                        </a>
                        <a href="#" class="fb-ic ml-0">
                            <i class="fa fa-instagram white-text mr-4"></i>
                        </a>
                        <a href="#" class="fb-ic ml-0">
                            <i class="fa fa-youtube white-text mr-4"></i>
                        </a>
                        <a href="#" class="fb-ic ml-0">
                            <i class="fa fa-vk white-text mr-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 md-4">
                    <h6 class="text-uppercase text-weight-bold"><strong>Unternehmen</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quae praesentium alias ut!</p>
                </div>
                
                <div class="col-md-2 col-lg-2 mx-auto col-xl-2 md-4">
                    <h6 class="text-uppercase text-weight-bold"><strong>Produkts</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#">Product 1</a></p>
                    <p><a href="#">Product 2</a></p>
                    <p><a href="#">Product 3</a></p>
                </div>
                
                <div class="col-md-3 col-lg-2 mx-auto col-xl-2 md-4">
                    <h6 class="text-uppercase text-weight-bold"><strong>Links</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#">Link 1</a></p>
                    <p><a href="#">Link 2</a></p>
                    <p><a href="#">Link 3</a></p>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase text-weight-bold"><strong>Kontakte</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fa fa-home mr-3"></i>Berlin</p>
                    <p><i class="fa fa-envelope mr-3"></i>info@gmx.de</p>
                    <p><i class="fa fa-phone mr-3"></i>+49 157 1234567</p>
                </div>
            </div>
        </div>

    </footer>



    <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
