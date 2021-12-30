<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo/logo.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('courses') }}">Courses</a></li>
                        <li><a class="dropdown-item" href="">Webinars</a></li>
                        <li><a class="dropdown-item" href="#">Events</a></li>
                        <li><a class="dropdown-item" href="#">Scholarships</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Join as Organization</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Contact' ? 'active' : '' }}" href="#">Contact Us</a>
                </li>
            </ul>

            @auth
                <div class="d-flex">
                    <a href="/" class="btn btn-outline-primary me-3 rounded">{{ auth()->user()->name }}</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary rounded">Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-custom btn-login me-2 rounded">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-custom btn-register rounded">Register</a>
                </div>
            @endguest
        </div>
    </div>
</nav>
