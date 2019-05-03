<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>u-WORKY: @yield('title')</title>

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/icomoon.css')}}" >
    <link rel="stylesheet" href="{{asset('frontend/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-awesome/css/all.css')}}">
</head>

<body class="body-index">
    <header class="@yield('header')">
        <!--Navbar-->
        @include('partials.navbar')
        <!--/.Navbar-->

        <!-- Poster -->
        @yield('poster')
        <div class="poster poster-full poster-index">
            <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1><strong>Find your   <span>dream job!</span></strong></h1>
                        <h5><strong>Perfect employment &amp; career opportunities</strong></h5>
                    </div>
                </div>
            </div>

            <form action="">
                <div class="row search-fields">
                <div class="search-field col-xl col-lg col-md-12">
                    <select class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Search here...">
                    <option value="" disabled selected>Enter job title...</option>
                    <option value="1">PHP</option>
                    <option value="2">Android</option>
                    <option value="3">IOS</option>
                    <option value="4">JavaScript</option>
                    </select>
                    <label>Keywords?</label>
                </div>

                <div class="search-field col-xl col-lg col-md-12">
                    <select class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Search here...">
                    <option value="" disabled selected>Enter location...</option>
                    <option value="1">Uzbekistan</option>
                    <option value="2">USA</option>
                    <option value="3">Korea</option>
                    <option value="4">Japan</option>
                    </select>
                    <label>Where?</label>
                </div>

                <div class="search-field col-xl col-lg col-md-12">
                    <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here...">
                    <option value="" disabled selected>Enter category...</option>
                    <option value="1">IT &amp; Computer</option>
                    <option value="2">Finance &amp; Logistics</option>
                    <option value="3">Arts, Media, Design</option>
                    <option value="4">Education</option>
                    <option value="5">Engineering</option>
                    </select>
                    <label>Category?</label>
                </div>

                <div class="search-field-btn col-xl-1 col-lg-1 col-md-12">
                    <button type="button" class="btn btn-primary btn-block btn-rounded">
                    <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                </div>

                <div class="row trending-keywords">
                    <div class="col-12">
                    <span class="trending-keywords-title">Trending Keywords:</span>
                    <br>
                    <a href="#">PHP</a>
                    <a href="#">IOS</a>
                    <a href="#">Android</a>
                    <a href="#">JavaScript</a>
                    <a href="#">Design</a>
                    </div>
                </div>

            </form>

            </div>
        </div>
        <!-- ./Poster -->
    </header>

    <!--Main Layout-->
    <main class="text-center">
        @yield('content')
    </main>
    <!--Main Layout-->

    <!--Footer-->
    @include('partials.footer')
    <!--/Footer-->

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('frontend/js/mdb.js')}}"></script>

    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>
    @yield('scripts')
</body>
</html>
