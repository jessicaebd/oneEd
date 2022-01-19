@extends('layouts.main')

@section('container')
    <div class="bg-grey">
        <!-- Featured Courses -->
        <div class="container-fluid mt-5 pt-5 pb-4 bg-blue">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            @foreach ($competitionList->take(1) as $competition)
                                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                                    <div class="row g-0">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="/images/competition/{{ $competition['poster'] }}"
                                                class="img-fluid rounded my-2" alt="..." style="max-height: 150px">
                                        </div>

                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div
                                                    class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                    Latest Event
                                                </div>

                                                <a href="competition/{{ $competition['slug'] }}" class="mt-auto">
                                                    <h5 class="card-title m-font text-blue">
                                                        <b>{{ $competition['title'] }}</b>
                                                    </h5>
                                                </a>

                                                <div class="card-text xs-font d-flex mt-5">
                                                    <div class="col-10">
                                                        <small class="text-muted"> Registration:
                                                            {{ $competition['registrationDate'] }}</small>
                                                        <br>
                                                        <small class="text-muted"> Event:
                                                            {{ $competition['eventDate'] }}</small>
                                                    </div>

                                                    <div class="align-self-end col-2">
                                                        <a href="competitions/{{ $competition['slug'] }}"
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
                            @foreach ($competitionList->slice(1)->take(1) as $competition)
                                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                                    <div class="row g-0">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="/images/competition/{{ $competition['poster'] }}"
                                                class="img-fluid rounded my-2" alt="..." style="max-height: 150px">
                                        </div>

                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div
                                                    class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                    Latest Event
                                                </div>

                                                <a href="competition/{{ $competition['slug'] }}" class="mt-auto">
                                                    <h5 class="card-title m-font text-blue">
                                                        <b>{{ $competition['title'] }}</b>
                                                    </h5>
                                                </a>

                                                <div class="card-text xs-font d-flex mt-5">
                                                    <div class="col-10">
                                                        <small class="text-muted"> Registration:
                                                            {{ $competition['registrationDate'] }}</small>
                                                        <br>
                                                        <small class="text-muted"> Event:
                                                            {{ $competition['eventDate'] }}</small>
                                                    </div>

                                                    <div class="align-self-end col-2">
                                                        <a href="competitions/{{ $competition['slug'] }}"
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
                            @foreach ($competitionList->slice(2)->take(1) as $competition)
                                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                                    <div class="row g-0">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <img src="/images/competition/{{ $competition['poster'] }}"
                                                class="img-fluid rounded my-2" alt="..." style="max-height: 150px">
                                        </div>

                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div
                                                    class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                    Latest Event
                                                </div>

                                                <a href="competition/{{ $competition['slug'] }}" class="mt-auto">
                                                    <h5 class="card-title m-font text-blue">
                                                        <b>{{ $competition['title'] }}</b>
                                                    </h5>
                                                </a>

                                                <div class="card-text xs-font d-flex mt-5">
                                                    <div class="col-10">
                                                        <small class="text-muted"> Registration:
                                                            {{ $competition['registrationDate'] }}</small>
                                                        <br>
                                                        <small class="text-muted"> Event:
                                                            {{ $competition['eventDate'] }}</small>
                                                    </div>

                                                    <div class="align-self-end col-2">
                                                        <a href="competitions/{{ $competition['slug'] }}"
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
        <div class="container mt-1">
            <h1 class="text-center p-5 fs-2"> <b>Explore Competitions</b></h1>
            <div class="row">
                @foreach ($competitionList as $competition)
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="card shadow-sm" style="min-height: 450px;">
                            <div class="d-flex justify-content-center">
                                <img src="/images/competition//{{ $competition['poster'] }}"
                                    class="img-fluid rounded my-2" alt="..." style="max-height: 250px">
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title m-font"><b>{{ $competition['title'] }}</b></h5>

                                <small class="card-text text-muted mb-1">
                                    <a href="#"
                                        class="card-text text-decoration-none text-muted xs-font">{{ $competition['organizer'] }}</a>
                                </small>

                                <small class="card-text text-muted xs-font">
                                    <i class="bi bi-clock"></i> {{ $competition['eventDate'] }}
                                </small>

                                <a href="competitions/{{ $competition['slug'] }}"
                                    class="btn btn-primary btn-main btn-custom mt-auto">Register</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
