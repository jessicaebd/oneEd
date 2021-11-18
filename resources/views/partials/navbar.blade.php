<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm p-md-3 p-2 bg-body bg-primary">
    <div class="container">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="images/logo2.png" alt="Logo" width="110" height="40" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:blue"></span>
        </button>

        <div class="collapse navbar-collapse nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"
            id="navbarToggler">
            <ul class="nav col-12 col-md-auto mb-2 me-auto justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-secondary {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 link-secondary {{ $title === 'Features' ? 'active' : '' }} dropdown-toggle"
                        href="/features" id="features-dropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">Features</a>
                    <ul class="dropdown-menu" aria-labelledby="features-dropdown">
                        <li><a class="dropdown-item link-secondary {{ $title === 'Courses' ? 'active' : '' }}"
                                href="/courses">Courses</a></li>
                        <li><a class="dropdown-item link-secondary {{ $title === 'Webinars' ? 'active' : '' }}"
                                href="#">Webinars</a></li>
                        <li><a class="dropdown-item link-secondary {{ $title === 'Competitions' ? 'active' : '' }}"
                                href="#">Competitions</a></li>
                        <li><a class="dropdown-item link-secondary {{ $title === 'Scholarships' ? 'active' : '' }}"
                                href="#">Scholarships</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item link-secondary {{ $title === 'Organization' ? 'active' : '' }}"
                                href="#">Join as Organization</a></li>
                    </ul>
                </li>
                <li><a href="/pricing"
                        class="nav-link px-2 link-secondary {{ $title === 'Pricing' ? 'active' : '' }}">Pricing</a>
                </li>
                <li><a href="/about"
                        class="nav-link px-2 link-secondary {{ $title === 'About' ? 'active' : '' }}">About</a>
                </li>
            </ul>

            @auth
                <div class="col-md-4 text-end d-flex">
                    <a href="/" class="btn btn-outline-primary me-3 rounded-pill">{{ auth()->user()->name }}</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary rounded-pill">Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="col-md-4 text-end">
                    <a href="/login" class="btn btn-outline-primary me-2 rounded-pill">Login</a>
                    <a href="/register" class="btn btn-primary rounded-pill">Register</a>
                </div>
            @endguest

        </div>
    </div>
</nav>
