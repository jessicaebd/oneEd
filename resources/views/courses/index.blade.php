@extends('layouts.main')

@section('container')
    <!-- Featured Courses -->
    <div class="container-fluid mt-4 pt-5 pb-2 bg-dark">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="col-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach ($coursesList->take(4) as $course)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3 ">
                                    <div class="card card-animation" style="min-height: 50px;">
                                        <img src="https://source.unsplash.com/1600x900?{{ $course['category'] }}"
                                            class="card-img-top" alt="...">

                                        <div class="card-img-overlay d-flex flex-column">
                                            <a href="courses/{{ $course['slug'] }}" class="mt-auto text-blue">
                                                <h5 class="card-title small-font text-white">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>
                                            <small
                                                class="text-white xs-font fw-light text-muted">{{ $course['mentorName'] }}</small>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="row">
                                @foreach ($coursesList->slice(3, 8) as $course)
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 ">
                                        <div class="card card-animation" style="min-height: 50px;">
                                            <img src="https://source.unsplash.com/1600x900?{{ $course['category'] }}"
                                                class="card-img-top" alt="...">

                                            <div class="card-img-overlay d-flex flex-column">
                                                <a href="courses/{{ $course['slug'] }}" class="mt-auto text-blue">
                                                    <h5 class="card-title small-font text-white">
                                                        <b>{{ $course['title'] }}</b>
                                                    </h5>
                                                </a>
                                                <small
                                                    class="text-white xs-font fw-light text-muted">{{ $course['mentorName'] }}</small>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="row">
                                @foreach ($coursesList->slice(2, 4) as $course)
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 ">
                                        <div class="card card-animation" style="min-height: 50px;">
                                            <img src="https://source.unsplash.com/1600x900?{{ $course['category'] }}"
                                                class="card-img-top" alt="...">

                                            <div class="card-img-overlay d-flex flex-column">
                                                <a href="courses/{{ $course['slug'] }}" class="mt-auto text-blue">
                                                    <h5 class="card-title small-font text-white">
                                                        <b>{{ $course['title'] }}</b>
                                                    </h5>
                                                </a>
                                                <small
                                                    class="text-white xs-font fw-light text-muted">{{ $course['mentorName'] }}</small>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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
    </div>
    <!-- End of featured Courses -->


    <!-- Explore Courses -->
    <div class="container mt-2">
        <h1 class="text-center p-5"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($coursesList as $course)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card" style="min-height: 325px;">
                        <img src="https://source.unsplash.com/1600x900?{{ $course['category'] }}" class="card-img-top"
                            alt="...">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>{{ $course['title'] }}</b></h5>

                            <small class="card-text text-muted mb-1">
                                <a href="#"
                                    class="card-text text-decoration-none text-muted">{{ $course['mentorName'] }}</a>
                            </small>

                            {{-- <p class="card-text">{{ $course['description'] }}</p> --}}

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
    </div>
    <!-- End of Explore Courses -->
@endsection
