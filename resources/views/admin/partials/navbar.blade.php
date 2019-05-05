<nav class="navbar fixed-top navbar-expand-lg top-nav-collapse double-nav">
    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars white-text"></i></a>
    </div>

    <!-- Navbar links -->
    <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
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

    </ul>
    <!-- /Navbar links -->
</nav>
