@extends('layouts.main')

@section('container')
    <!-- Header -->
    <div
        class="jumbotron d-flex justify-content-left align-items-center mt-5 animate__animated animate__fadeIn animate_slower">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-md-start text-center">
                    <h1 style="font-size: 2 em;">
                        <b>Learn, Webinar, Competition, and Scholarship
                        </b>
                    </h1>
                    <h1 style="font-size: 2 em; color: rgb(103, 72, 214);">
                        <b>All in One Apps
                        </b>
                    </h1>
                    <a href="register" class="btn fs-5 py-2 px-4 btn-custom btn-join mt-4">Join, now. It's
                        <b>FREE!</b></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header -->

    <!-- What We Provide -->
    <div class="mb-5 py-5 text-center col-lg-6 mx-auto what-we-provide">
        <h3 class="display-10 fw-bold mb-3">What we provide</h3>
        <p class="mb-4">
            We provide you with the best learning platform all in <span class="text-blue fw-bold">one app</span>.
        </p>

        {{-- Features --}}
        <div class="mt-5 d-grid gap-3 d-sm-flex justify-content-sm-center">
            <div class="row">
                {{-- Feature --}}
                <div class="col-lg-3 feature mb-4">

                    <a href="/courses">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-courses.png" />
                    </a>
                    <h6 class="mt-2 display-10 fw-bold">Courses</h6>
                    <small class="s-font">
                        Grow yourself by learning every day.
                    </small>
                </div>
                {{-- End of Feature --}}

                {{-- Feature --}}
                <div class="col-lg-3 feature mb-4">
                    <a href="/webinars">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-webinars.png" />
                    </a>
                    <h6 class="mt-2 display-10 fw-bold">Webinars</h6>
                    <small class="s-font">
                        Learn from professional speakers.
                    </small>
                </div>
                {{-- End of Feature --}}

                {{-- Feature --}}
                <div class="col-lg-3 feature mb-4">
                    <a href="/competitions">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-competitions.png" />
                    </a>
                    <h6 class="mt-2 display-10 fw-bold">Competitions</h6>
                    <small class="s-font">
                        Challenge yourself to know more about the world.
                    </small>
                </div>
                {{-- End of Feature --}}

                {{-- Feature --}}
                <div class="col-lg-3 feature mb-4">
                    <a href="/scholarships">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-scholarships.png" />
                    </a>
                    <h6 class="mt-2 display-10 fw-bold">Scholarships</h6>
                    <small class="s-font">
                        Don't miss out on the opportunity to get a scholarship.
                    </small>
                </div>
                {{-- End of Feature --}}
            </div>
        </div>
        {{-- End of Features --}}
    </div>
    <!-- What We Provide -->
@endsection
