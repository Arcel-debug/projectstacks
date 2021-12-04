<nav class="navbar navbar-expand-md sticky-top navbar-light bg-white min-ht-100 shadow w-100">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">ProjectStacks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Request::segment(1) == 'jobsearch') active @endif" aria-current="page" href="{{ url('jobsearch') }}">Find Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#whyus">Why Us</a>
                </li>
                @auth
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="#whyus">Payments</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="#whyus">Saved Jobs</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="#whyus">Applied Jobs</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <form method="POST" action="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        @csrf
                        <button class="btn btn-danger text-start br-20" type="submit">Log Out</button>
                    </form>
                </li>
                @else
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="#whyus">Login</a>
                </li>
                <li class="nav-item d-block d-md-none d-lg-none d-xl-none d-xxl-none">
                    <a class="nav-link" href="#whyus">Register</a>
                </li>
                @endauth
            </ul>
            <div class="d-flex d-none d-md-block d-lg-block d-xl-block d-xxl-block">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('default-images/user-icon.png')}}" alt="" class="">{{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{url('/profile')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Payments</a></li>
                            <li><a class="dropdown-item" href="#">Saved Jobs</a></li>
                            <li><a class="dropdown-item" href="#">Applied Jobs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    @csrf
                                    <button class="btn btn-danger w-100 text-start" type="submit">Log Out</button>
                                </form>
                                
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item p-2 ps-0">
                        <a class="btn btn-light bg-white border-0" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item p-2 ps-0">
                        <a class="btn btn-danger bg-red br-20" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>