<nav class="navbar navbar-expand-xl navbar-dark @if($type) scrolling-navbar @else top-nav-collapse @endif fixed-top">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('frontend/img/logo.png')}}" alt="u-WORKY" />
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="mainNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto d-flex">
            <li class="nav-item my-auto">
                <a class="nav-link" href="{{route('home')}}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            @if(Auth::check())
            <!-- Dropdown -->
            <li class="nav-item dropdown my-auto">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Jobs</a>
                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownMenuLink">
                    {{-- <a class="dropdown-item text-center" href="#">Job Categories</a> --}}
                    <a class="dropdown-item text-center" href="{{route('jobs')}}">Search for job</a>
                    <a class="dropdown-item text-center" href="#">Find on Map</a>
                </div>
            </li>
            <!-- /Dropdown -->

            <li class="nav-item my-auto">
                <a class="nav-link" href="{{route('candidates')}}">Candidates</a>
            </li>
            @endif

            <li class="nav-item my-auto">
                <a class="nav-link" href="{{route('employers')}}">Employers</a>
            </li>

            <li class="nav-item my-auto">
                <a class="nav-link" href="#">Contact us</a>
            </li>

            @if(Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user pr-2"></i>Profile
                </a>
                <div class="dropdown-menu dropdown-menu-center text-center" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('home')}}">Home</a>
                    <a class="dropdown-item" href="{{route('admin.main')}}">Dashboard</a>
                    <form action="{{route('logout')}}" method="POST" class="w-auto">
                        <input class="dropdown-item" type="submit" value="Log Out">
                        @csrf
                    </form>
                    {{-- <a class="dropdown-item" onclick="logout();">Log Out</a> --}}
                </div>
            </li>
            @else
            <li>
                <form class="form-inline">
                    <div class="md-form container-fluid my-auto">
                        <a href="{{route('login')}}">
                            <button type="button" class="btn btn-primary btn-block btn-rounded">
                                Sign in
                            </button>
                        </a>

                    </div>
                </form>
            </li>
            @endif
        </ul>
        <!-- /Links -->
    </div>
    <!-- /Collapsible content -->
</nav>
