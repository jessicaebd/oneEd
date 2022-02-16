@extends('layouts.main')

@section('container')
    <!-- Featured Courses -->
    <div class="container-fluid mt-5 pt-5 pb-4 bg-grey">
        <h1 class="ms-4 mb-3 fs-3 text-dark"><b>Latest Course</b></h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @foreach ($coursesList->take(1) as $course)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 280px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 250px">
                                    </div>

                                    <div class="col-md-7 px-5">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="course/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title l-font text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text m-font mt-5">
                                                <div class="">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $course['duration'] }} weeks</small>
                                                </div>

                                                <div class="pt-5">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto xs-font">Register
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @foreach ($coursesList->slice(1)->take(1) as $course)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 230px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 180px">
                                    </div>

                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="course/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title m-font text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text xs-font d-flex mt-5">
                                                <div class="col-10">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $course['duration'] }}</small>
                                                </div>

                                                <div class="align-self-end col-2">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto xs-font">Register
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @foreach ($coursesList->slice(2)->take(1) as $course)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 230px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 180px">
                                    </div>

                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="course/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title m-font text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text xs-font d-flex mt-5">
                                                <div class="col-10">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $course['duration'] }}</small>
                                                </div>

                                                <div class="align-self-end col-2">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto xs-font">Register
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End of featured Courses -->


    <!-- Explore Courses -->
    {{-- <div class="container mt-1">
        <h1 class="text-center p-5 fs-2"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($coursesList as $course)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card" style="min-height: 325px;">
                        <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}" class="card-img-top"
                            alt="...">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>{{ $course['title'] }}</b></h5>

                            <small class="card-text text-muted mb-1">
                                <a href="#"
                                    class="card-text text-decoration-none text-muted">{{ $course['mentorName'] }}</a>
                            </small>

                            <p class="card-text">{{ $course['description'] }}</p>

                            <small class="card-text text-muted">
                                <i class="bi bi-hourglass-split"></i> {{ $course['duration'] }} weeks long
                            </small>

                            <a href="courses/{{ $course['slug'] }}"
                                class="btn btn-primary btn-main btn-custom mt-auto">See
                                Course</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div> --}}
    <!-- End of Explore Courses -->


    <div class="container mt-1">
        <h1 class="text-center p-5 fs-2"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($coursesList as $course)
                <div class="card mb-2 p-2 shadow-sm">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}" class="card-img"
                                alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <a href="courses/{{ $course['slug'] }}" class="text-decoration-none text-dark">
                                    <h5 class="card-title m-font"><b>{{ $course['title'] }}</b></h5>
                                </a>
                                <p class="card-text s-font mb-0">{{ $course['description'] }}</p>

                                <small class="text-muted mb-1">
                                    <a href="#"
                                        class="card-text text-decoration-none text-muted xs-font">{{ $course['mentorName'] }}</a>
                                </small>
                                <br>
                                <p class="card-text mb-1">
                                    <small class="s-font">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        Saturday, 8 p.m.
                                    </small>
                                </p>
                                <small class="card-text text-muted xs-font">
                                    {{ $course['duration'] }} weeks long
                                </small>
                                <small class="card-text text-muted xs-font card-category">
                                    <i class="bi bi-dot"></i>
                                    {{ $course['category'] }}
                                </small>


                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
