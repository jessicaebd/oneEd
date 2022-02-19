@extends('layouts.main')

@section('container')
    <!-- Featured Courses -->
    <div class="container-fluid mt-5 pt-5 pb-4 bg-grey">
        <h1 class="ms-4 mb-3 fs-3 text-dark"><b>Latest Courses</b></h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @foreach ($coursesList->take(1) as $course)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 280px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <img src="/images/course/{{ $course['poster'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 250px">
                                    </div>

                                    <div class="col-md-7 px-5 py-2">
                                        <div class="card-body">
                                            <a href="courses/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title fs-4 text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text m-font mt-3">
                                                <div class="py-2">
                                                    <small class="text-muted fw-normal">
                                                        {{ Str::limit($course['description'], 60) }}
                                                    </small>
                                                </div>

                                                <div class="py-1 s-font">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }} <i class="bi bi-dot"></i>
                                                        {{ $course['duration'] }} weeks</small>
                                                </div>

                                                <div class="pt-5">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto m-font fw-bolder px-4 py-2 rounded-pill">Register
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
                                style="min-height: 280px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <img src="/images/course/{{ $course['poster'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 250px">
                                    </div>

                                    <div class="col-md-7 px-5 py-2">
                                        <div class="card-body">
                                            <a href="course/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title fs-4 text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text m-font mt-3">
                                                <div class="py-2">
                                                    <small class="text-muted fw-normal">
                                                        {{ Str::limit($course['description'], 60) }}
                                                    </small>
                                                </div>

                                                <div class="py-1 s-font">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }} <i class="bi bi-dot"></i>
                                                        {{ $course['duration'] }} weeks</small>
                                                </div>

                                                <div class="pt-5">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto m-font fw-bolder px-4 py-2 rounded-pill">Register
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
                                style="min-height: 280px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-5 d-flex justify-content-center">
                                        <img src="/images/course/{{ $course['poster'] }}"
                                            class="card-img img-fluid rounded my-2" alt="..." style="max-height: 250px">
                                    </div>

                                    <div class="col-md-7 px-5 py-2">
                                        <div class="card-body">
                                            <a href="course/{{ $course['slug'] }}" class="mt-auto">
                                                <h5 class="card-title fs-4 text-blue">
                                                    <b>{{ $course['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text m-font mt-3">
                                                <div class="py-2">
                                                    <small class="text-muted fw-normal">
                                                        {{ Str::limit($course['description'], 60) }}
                                                    </small>
                                                </div>

                                                <div class="py-1 s-font">
                                                    <small class="text-muted">
                                                        {{ $course['mentorName'] }} <i class="bi bi-dot"></i>
                                                        {{ $course['duration'] }} weeks</small>
                                                </div>

                                                <div class="pt-5">
                                                    <a href="courses/{{ $course['slug'] }}"
                                                        class="btn btn-primary btn-main btn-custom mt-auto m-font fw-bolder px-4 py-2 rounded-pill">Register
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
                        <img src="/images/course/{{ $course['poster'] }}" class="card-img-top"
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


    <div class="container mt-1 p-5">
        <h1 class="text-center p-5 fs-2"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($coursesList as $course)
                <div class="card mb-2 p-2 shadow-sm">
                    <div class="row no-gutters">
                        <div class="col-md-3 justify-content-center" style="display: flex ; align-items: center">
                            <img src="/images/course/{{ $course['poster'] }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body hover-zoom">
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
