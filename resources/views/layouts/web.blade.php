<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('stylesheets')
</head>
<body>

    <!-- TopBar -->

    <section class="bg-secondary topbar">
        <div class="container">
            <p class="text-right py-2 text-white">Get in touch with us: (888) 775-8857</p>
        </div>
    </section>

    <!-- NavBar -->

    <section class="container main-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
            <a class="navbar-brand" href="#">
                <img src="/assets/home-page/logo.svg" alt="" class="w-100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-2 ">
                  <a class="nav-link text-secondary" href="#">How it Works </a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link text-secondary" href="#">PR-CRM</a>
                </li>

                <li class="nav-item mx-2">
                  <a class="nav-link text-secondary" href="#">Our leads</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-secondary" href="#">Pricing</a>
                  </li>
              </ul>
            </div>
            <div class="mx-0">
              <a class="btn border-primary px-4">Login</a>
              <a class="btn btn-primary px-4">Sign Up</a>
          </div>

          </nav>
    </section>

    @yield('content')

{{--footer--}}
    <footer class="bg-primary">
        <div class="container">
            <div class="row py-5">
                <div class=" col-7 col-md-4 order-1  ">
                    <img src="/images/footer_logo.svg" class="img-fluid pb-3" alt="logo" >
                   <p>
                       <i class="fas fa-phone-alt"></i>
                       <span>Get in touch:
                           <a href="8887758857">(888) 775-8857
                           </a>
                       </span>
                       </p>
                    <p><i class="fas fa-map-marker-alt"></i>
                        <span>Address line goes here Sreet ligne goes here</span>
                    </p>

                </div>
                <div class=" col-12 col-md-5 order-3 order-md-2 ">

                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Our leads</a></li>
                                <li><a href="#">PR- CRM</a></li>
                                <li><a href="#">How it works</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=" col-5 col-md-3 order-2  text-center">
                    <img src="images/trustpilot.png" class="img-fluid " style="max-width: 156px;min-width: 156px" alt="">
                </div>
            </div>
        </div>


        <div class="container-fluid" style="border-top:1px solid rgba(0, 0, 0, 0.11); ">
            <div class="row py-3">
                <p class="m-auto">© Company 2021 All Rights Reserved.</p>
            </div>
        </div>



    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
