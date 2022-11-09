<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    @if (session()->get('user_type') == 'customer')
                        <li class="nav-item">
                            <a class="nav-link
                        @if (Request::is('home')) active @endif"
                                href="/home">Home</a>
                        </li>
                    @endif
                    @if (session()->get('user_type') == 'admin')
                        <li class="nav-item">
                            <a class="nav-link
                        @if (Request::is('admin')) active @endif"
                                href="/admin">Dashboard</a>
                        </li>
                    @endif
                    @if (session()->get('user_type') == 'admin')
                        <li class="nav-item
                        @if (Request::is('customers')) active @endif">
                            <a class="nav-link" href="/customers">Customers</a>
                        </li>
                    @endif
                    @if (session()->get('user_type') == 'customer')
                        <li class="nav-item
                        @if (Request::is('park')) active @endif">
                            <a class="nav-link" href="/park">Booking</a>
                        </li>
                    @endif
                @endauth
                @guest
                    <li class="nav-item
                    @if (Request::is('login')) active @endif">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        @if (Request::is('registration')) active @endif"
                            href="/registration">Registration</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
