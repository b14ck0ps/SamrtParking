<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item
                    @if (Request::is('login')) active @endif"">
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
