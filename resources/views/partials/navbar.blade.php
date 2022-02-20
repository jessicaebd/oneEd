<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-2 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/images/logo/logo.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                <li class="nav-item ms-3">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Features
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('courses') }}">Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('webinars') }}">Webinars</a></li>
                        <li><a class="dropdown-item" href="{{ route('competitions') }}">Competitions</a></li>
                        <li><a class="dropdown-item" href="{{ route('scholarships') }}">Scholarships</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('organize') }}">Organize Event</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link {{ $title === 'About Us' ? 'active' : '' }}"
                        href="{{ route('aboutUs') }}">About
                        Us</a>
                </li>
            </ul>

            @auth
                <div class="d-flex">
                    <div class="notif px-2 border-end align-items-center">
                        <a href="#" class="me-2">

                            <img src="/images/icons/notification.png" alt="" style="height: 20px; width: 20px;">

                        </a>
                        <a href="/chat" class="me-2">
                            <img src="/images/icons/messenger.png" alt="" style="height: 18px; width: 18px;">
                        </a>
                    </div>

                    <div class="dropdown px-2">
                        <a class="" href="{{ route('dashboard') }}" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <img src="/images/peter.jpg" class="img profile-image rounded-pill" width="25" height="25">
                            <span class="ms-2 text-dark">{{ auth()->user()->name }}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
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
