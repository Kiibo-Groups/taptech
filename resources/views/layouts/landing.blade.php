<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NFT. " name="description" />
    <meta content="KiiboGroups" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link id="bootstrap" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('assets/css/bootstrap-grid.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS Extras -->
    <link href="{{ asset('assets/css/customs.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')

</head>

<body>
    <div id="wrapper">
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home_landing') }}">
                                            <img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="index.html">Home<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_landing.companies') }}">Companies & Team<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_landing.shop') }}">SHOP<span></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Contact US<span></span></a>
                                    </li>

                                </ul>
                            </div>

                            <div class="de-flex-col header-col-mid">
                                <div class="menu_side_area">
                                    <a href="https://links.kiibo.mx/login" class="btn-main"><i
                                            class="icon_wallet_alt"></i><span>Login</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            @yield('content')
        </div>
    </div>




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/enquire.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
</body>

</html>
