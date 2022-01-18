@extends('layouts.main')

@section('container')
    <!-- Featured Courses -->
    <div class="container-fluid mt-5 pt-5 pb-4 bg-blue">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @foreach ($competitionList->take(6) as $competition)
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                                <div class="card feature" style="min-height: 50px;">
                                    <img src="https://source.unsplash.com/1600x900?{{ $competition['title'] }}"
                                        class="card-img-top" alt="...">

                                    <div class="card-img-overlay d-flex flex-column">
                                        <a href="competition/{{ $competition['slug'] }}" class="mt-auto text-blue">
                                            <h5 class="card-title s-font text-white">
                                                <b>{{ $competition['title'] }}</b>
                                            </h5>
                                        </a>
                                        <small
                                            class="text-white xs-font fw-light text-muted">{{ $competition['organizer'] }}</small>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @foreach ($competitionList->slice(5)->take(6) as $competition)
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                                <div class="card feature" style="min-height: 50px;">
                                    <img src="https://source.unsplash.com/1600x900?{{ $competition['title'] }}"
                                        class="card-img-top" alt="...">

                                    <div class="card-img-overlay d-flex flex-column">
                                        <a href="competition/{{ $competition['slug'] }}" class="mt-auto text-blue">
                                            <h5 class="card-title s-font text-white">
                                                <b>{{ $competition['title'] }}</b>
                                            </h5>
                                        </a>
                                        <small
                                            class="text-white xs-font fw-light text-muted">{{ $competition['organizer'] }}</small>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row ">
                        @foreach ($competitionList->slice(10)->take(6) as $competition)
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-3 ">
                                <div class="card feature" style="min-height: 50px;">
                                    <img src="https://source.unsplash.com/1600x900?{{ $competition['title'] }}"
                                        class="card-img-top" alt="...">

                                    <div class="card-img-overlay d-flex flex-column">
                                        <a href="competition/{{ $competition['slug'] }}" class="mt-auto text-blue">
                                            <h5 class="card-title s-font text-white">
                                                <b>{{ $competition['title'] }}</b>
                                            </h5>
                                        </a>
                                        <small
                                            class="text-white xs-font fw-light text-muted">{{ $competition['organizer'] }}</small>

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
    <div class="container mt-1">
        <h1 class="text-center p-5 fs-2"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($competitionList as $competition)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card" style="min-height: 325px;">
                        <img src="https://source.unsplash.com/1600x900?{{ $competition['title'] }}"
                            class="card-img-top" alt="...">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>{{ $competition['title'] }}</b></h5>

                            <small class="card-text text-muted mb-1">
                                <a href="#"
                                    class="card-text text-decoration-none text-muted">{{ $competition['organizer'] }}</a>
                            </small>

                            <p class="card-text">{{ Str::limit($competition['description'], 50) }}</p>

                            <small class="card-text text-muted">
                                <i class="bi bi-hourglass-split"></i> {{ $competition['date'] }}
                            </small>

                            <a href="competitions/{{ $competition['slug'] }}"
                                class="btn btn-primary btn-main btn-custom mt-auto">See
                                Course</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- End of Explore Courses -->


    {{-- <div class="container mt-1">
        <h1 class="text-center p-5 fs-2"> <b>Explore Courses</b></h1>
        <div class="row">
            @foreach ($competitionList as $competition)
                <div class="card mb-2 p-2">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="https://source.unsplash.com/1600x900?{{ $competition['title'] }}"
                                class="card-img" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <a href="competition/{{ $competition['slug'] }}" class="text-decoration-none text-dark">
                                    <h5 class="card-title m-font"><b>{{ $competition['title'] }}</b></h5>
                                </a>
                                <p class="card-text s-font mb-0">{{ $competition['description'] }}</p>

                                <small class="text-muted mb-1">
                                    <a href="#"
                                        class="card-text text-decoration-none text-muted xs-font">{{ $competition['organizer'] }}</a>
                                </small>
                                <br>
                                <p class="card-text mb-1">
                                    <small class="s-font">
                                        <i class="bi bi-calendar-event me-1"></i>
                                        Saturday, 8 p.m.
                                    </small>
                                </p>
                                <small class="card-text text-muted xs-font">
                                    {{ $competition['date'] }} weeks long
                                </small>
                                <small class="card-text text-muted xs-font card-category">
                                    <i class="bi bi-dot"></i>
                                    {{ $competition['category'] }}
                                </small>


                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
@endsection
