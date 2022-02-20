@extends('layouts.main')

@section('container')
    <div class="bg-light text-dark">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row g-5 py-5">

                <h1 class="text-blue l-font fw-bold display-5 fs-1 fw-bold lh-1">About OneEd</h1>
                <hr>

                <div class="about">
                    <h1 class="text-blue l-font fw-bold">Background</h1>
                    <p class="s-font">The pandemic has forced people to adapt to technology, especially students and
                        teachers. The demand for online-based education is rising exponentially, whether it’s online
                        courses, webinars, or scholarships. There are already existing platforms to support, but they are
                        separated and not very convenient to use. We believe that many things can be done better to improve
                        students' learning. In response to that matter, we will develop a web application called OneEd, a
                        more enhanced application to facilitate online courses for students and teachers, to help students
                        find webinars, competitions, and scholarships. To build this web application, we decided to use the
                        waterfall model rather than agile models. We find the advantages of the waterfall model suitable
                        with our requirements, so the result of this paper will be a one-stop-solution web application that
                        can help students with their education.

                    </p><br>
                    <h1 class="text-blue l-font fw-bold">Developers</h1>
                    <p class="s-font">
                        Frederic Setievi<br>
                        Jessica Natalia<br>
                        Theodore Raynard Tjhang<br>
                    </p><br>

                    <h1 class="text-blue l-font fw-bold">Contact Us</h1>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-2">
                                <a class="btn-floating btn-tw mx-1 text-black" href="https://whatsapp.com">
                                    <i class="bl bi-whatsapp" style="font-size: 24px;"></i>
                                </a>
                            </li>

                            <li class="ms-2">
                                <a class="btn-floating btn-li mx-1 text-black" href="https://facebook.com">
                                    <i class="bi bi-facebook" style="font-size: 24px;"></i>
                                </a>
                            </li>

                            <li class="ms-2">
                                <a class="btn-floating btn-dribbble mx-1 text-black" href="https://instagram.com">
                                    <i class="bi bi-instagram" style="font-size: 24px;"></i>
                                </a>
                            </li>

                            <li class="ms-2">
                                <a class="btn-floating btn-gplus mx-1 text-black" href="https://twitter.com">
                                    <i class="bi bi-twitter" style="font-size: 24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    @endsection
