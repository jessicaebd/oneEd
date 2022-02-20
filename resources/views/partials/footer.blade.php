<div class="container-fluid bg-blue text-white pt-2">
    <div class="container">
        <footer class="py-5">
            <div class="row py-2">
                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ route('home') }}"
                                class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('login') }}"
                                class="nav-link p-0 text-muted">Login</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('register') }}"
                                class="nav-link p-0 text-muted">Register</a>
                        </li>
                        <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}"
                                class="nav-link p-0 text-muted">About Us</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Features</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="{{ route('courses') }}"
                                class="nav-link p-0 text-muted">Courses</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('webinars') }}"
                                class="nav-link p-0 text-muted">Webinars</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('competitions') }}"
                                class="nav-link p-0 text-muted">Competitions</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('scholarships') }}"
                                class="nav-link p-0 text-muted">Scholarships</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-3 my-3 border-top">
                <p>&copy; 2021 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-2">
                        <a class="btn-floating btn-tw mx-1 text-white" href="https://whatsapp.com">
                            <i class="bi bi-whatsapp" style="font-size: 24px;"></i>
                        </a>
                    </li>

                    <li class="ms-2">
                        <a class="btn-floating btn-li mx-1 text-white" href="https://facebook.com">
                            <i class="bi bi-facebook" style="font-size: 24px;"></i>
                        </a>
                    </li>

                    <li class="ms-2">
                        <a class="btn-floating btn-dribbble mx-1 text-white" href="https://instagram.com">
                            <i class="bi bi-instagram" style="font-size: 24px;"></i>
                        </a>
                    </li>

                    <li class="ms-2">
                        <a class="btn-floating btn-gplus mx-1 text-white" href="https://twitter.com">
                            <i class="bi bi-twitter" style="font-size: 24px;"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-2">
                <h1 style="text-decoration: none; color: white;" class="mb-0"> OneEd</h1>Copyright © 2021
            </div>
            <!-- Copyright -->

        </footer>
    </div>
</div>
