<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QamQor') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/hotline.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: #FFFFE0">
    <div id="app" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#DEB887; height: 150px ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #0f5645">
                    <img style="width: 120px; height: 100px" src="{{asset('assets/img/logo.png')}}" alt="">  <h2><span class="Qtext">Q</span>amqor</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <nav id="navbar" class="navbar" style="color: #0f5645">
                        <ul>
                            <li><a class="nav-link scrollto " style="color: #0f5645; font-size: 20px;" href="{{route('want.Help')}}">{{__('navbar.help')}}</a></li>
                            <li><a class="nav-link scrollto " style="color: #0f5645; font-size: 20px;" href="{{route('want.toHelp.php')}}">{{__('navbar.toHelp.php')}}</a></li>
                            <li><a class="nav-link scrollto " style="color: #0f5645; font-size: 20px;" href="{{route('about')}}">{{__('navbar.about')}}</a></li>
                            <li><a class="nav-link scrollto" style="color: #0f5645; font-size: 20px;" href="{{url('/')}}">{{__('navbar.home')}}</a></li>

                                    <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a class="nav-link" style="color: #0f5645; font-size: 20px; text-decoration:initial" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li>
                                        <a class="nav-link" style="color: #0f5645; font-size: 20px;text-decoration:initial" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown"><a style="color: #0f5645; font-size: 20px; text-decoration:initial;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul>
                                        <li>
                                            <div aria-labelledby="navbarDropdown">
                                                <a style="color: #d58041; font-size: 20px;text-decoration:initial" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('navbar.logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            @can('view',\App\Models\Service::class)
                                            <a class="nav-link" style="color: #d58041" href="{{route('adm.users.index')}}">Admin Panel</a>
                                            @endcan
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                            <li class="dropdown"><a style="color: #0f5645; font-size: 15px; text-decoration:initial " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{config('app.languages')[app()->getLocale()]}}
                                </a>
                                <ul>
                                    <li>
                                        <div aria-labelledby="navbarDropdown">
                                            @foreach(config('app.languages') as $ln => $lang)
                                                <a style="color: #d58041; font-size: 15px;text-decoration:initial" href="{{route('switch.lang', $ln)}}">
                                                    {{$lang}}
                                                </a>
                                            @endforeach

                                        </div>
                                    </li>

                                </ul>
                        </ul>

                        <i class="bi bi-list mobile-nav-toggle"></i>

                    </nav><!-- .navbar -->
                </div>
            </div>
        </nav>
        <main class="py-4" style="color: #0f5645; width: 100%">
            @yield('content')
            <a href="+77079479645" class="call-now" rel="nofollow">
                <div class="kenit-alo-phone">
                    <div class="animated infinite zoomIn kenit-alo-circle"></div>
                    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                    <div class="animated infinite tada kenit-alo-img-circle"></div>
                </div>
            </a>
                <a href="https://t.me/+VQ6jeBBjH404Y2Qy" class="call-now" rel="nofollow">
                    <div class="kenit-alo-phones">
                        <div class="animated infinite zoomIn kenit-alo-circle"></div>
                        <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                        <div class="animated infinite tada kenit-alo-img-circles"></div>
                    </div>
                </a>
        </main>

    </div>
    <footer class="py-3 my-4 " style="background-color: #13866e;" >
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 " style=" font-weight:bold; color: white ">{{__('navbar.home')}}</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="font-weight:bold; color: white">{{__('navbar.about')}}</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="font-weight:bold; color: white">{{__('navbar.toHelp.php')}}</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 " style="font-weight:bold; color: white">{{__('navbar.help')}}</a></li>
        </ul>
        <p><h2 style="font-family: 'Kurale', cursive; margin: auto;" align="center"><span class="Qtext">Q</span>amqor </h2></p>
        <p class="text-center" style="font-weight: bold; color: white">&copy; 2024 </p>
    </footer>


    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>


    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
