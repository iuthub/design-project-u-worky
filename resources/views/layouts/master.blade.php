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
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/icomoon.css')}}">
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
        <!-- ./Poster -->
    </header>

    <!--Main Layout-->
    <main class="text-center">
        @yield('content')
    </main>
    <!--Main Layout-->

    <!--Footer-->
    @yield('footer')
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
