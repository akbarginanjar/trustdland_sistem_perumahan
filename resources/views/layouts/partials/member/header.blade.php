<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('images/logo-trustdland.webp') }}" style="width: 60px;" alt="">
            {{-- <h1 class="sitename">GP</h1>
            <span>.</span> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="text-warning">Home<br></a></li>
                <li class="dropdown"><a href="#"><span>Our Project</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/type-teduh">Type Teduh</a></li>
                        <li><a href="/type-50">Type 50</a></li>
                    </ul>
                </li>
                <li><a href="/">About Us</a></li>
                <li class="dropdown"><a href="#"><span>Join Us</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/partnership">Partnership</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list text-warning"></i>
        </nav>

        @guest
            <a class="btn-getstarted" href="/login">Login</a>
        @else
            {{-- <a class="btn-getstarted text-white" href="/member/dashboard">Dashboard Saya, {{ Auth::user()->name }}</a> --}}
            <a class="btn-getstarted" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout,
                {{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest

    </div>
</header>
