{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm p-md-2 p-0 bg-body bg-primary">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
            <img src="images/logo2.png" alt="Logo" width="100%" height="40" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:blue"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-3" href="/courses"><b>Courses</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="/webinars"><b>Webinars</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="/competitions"><b>Competitions</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="/scholarships"><b>Scholarships</b></a>
                </li>
            </ul>

            <a href="/login" class="btn btn-primary btn-custom me-3 ms-3 btn-md">Register / Login</a>
        </div>

    </div>
</nav> --}}
<nav class="bg-white fixed-top shadow-sm p-md-2 p-0">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-1">

            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="images/logo2.png" alt="Logo" width="110" height="40" class="d-inline-block align-text-top">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item">
                    <a class="nav-link px-2 link-secondary {{ $title === 'Home' ? 'active' : '' }}"
                        href="/"><b>Home</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 link-secondary {{ $title === 'Features' ? 'active' : '' }} dropdown-toggle"
                        href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Features</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item link-secondary {{ $title === 'Courses' ? 'active' : '' }}"
                                href="/courses">Courses</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item link-secondary {{ $title === 'Webinars' ? 'active' : '' }}"
                                href="/webinars">Webinars</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item link-secondary {{ $title === 'Competitions' ? 'active' : '' }}"
                                href="/competitions">Competitions</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item link-secondary {{ $title === 'Scholarships' ? 'active' : '' }}"
                                href="/scholarships">Scholarships</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 link-secondary {{ $title === 'About' ? 'active' : '' }}"
                        href="/about"><b>About</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 link-secondary {{ $title === 'Contact' ? 'active' : '' }}"
                        href="/contact"><b>Contact</b></a>
                </li>

            </ul>

            <div class="col-md-3 text-end">
                <a href="/login" class="btn btn-outline-primary me-2 rounded-pill">Login</a>
                <a href="/login" class="btn btn-primary rounded-pill">Register</a>
            </div>
        </header>
    </div>
</nav>
