@extends('layouts.main')

@section('container')
    <!-- Featured Webinar -->
    <div class="container-fluid mt-5 pt-5 pb-4 bg-grey">
        <h1 class="ms-4 mb-3 fs-3 text-dark"><b>Latest Webinar</b></h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        @foreach ($webinarList->take(1) as $webinar)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 230px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="/images/webinar/{{ $webinar['poster'] }}" class="img-fluid rounded my-2"
                                            alt="..." style="max-height: 180px">
                                    </div>

                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="webinars/{{ $webinar['slug'] }}" class="mt-auto">
                                                <h5 class="card-title m-font text-blue">
                                                    <b>{{ $webinar['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text xs-font d-flex mt-5">
                                                <div class="col-10">
                                                    <small class="text-muted">
                                                        {{ $webinar['eventDate'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $webinar['time'] }}</small>
                                                </div>

                                                <div class="align-self-end col-2">
                                                    <a href="webinars/{{ $webinar['slug'] }}"
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
                        @foreach ($webinarList->slice(1)->take(1) as $webinar)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 230px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="/images/webinar/{{ $webinar['poster'] }}" class="img-fluid rounded my-2"
                                            alt="..." style="max-height: 180px">
                                    </div>

                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="webinar/{{ $webinar['slug'] }}" class="mt-auto">
                                                <h5 class="card-title m-font text-blue">
                                                    <b>{{ $webinar['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text xs-font d-flex mt-5">
                                                <div class="col-10">
                                                    <small class="text-muted">
                                                        {{ $webinar['eventDate'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $webinar['time'] }}</small>
                                                </div>

                                                <div class="align-self-end col-2">
                                                    <a href="webinars/{{ $webinar['slug'] }}"
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
                        @foreach ($webinarList->slice(2)->take(1) as $webinar)
                            <div class="card mb-3 bg-light justify-content-center"
                                style="min-height: 230px; max-width: 1150px; border-radius: 1rem;">
                                <div class="row g-0 d-flex">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <img src="/images/webinar/{{ $webinar['poster'] }}"
                                            class="img-fluid rounded my-2" alt="..." style="max-height: 180px">
                                    </div>

                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="btn btn-outline-dark rounded-pill xs-font px-2 py-0 mb-3 text-blue">
                                                Latest Event
                                            </div>

                                            <a href="webinar/{{ $webinar['slug'] }}" class="mt-auto">
                                                <h5 class="card-title m-font text-blue">
                                                    <b>{{ $webinar['title'] }}</b>
                                                </h5>
                                            </a>

                                            <div class="card-text xs-font d-flex mt-5">
                                                <div class="col-10">
                                                    <small class="text-muted">
                                                        {{ $webinar['eventDate'] }}</small>
                                                    <br>
                                                    <small class="text-muted">
                                                        {{ $webinar['time'] }}</small>
                                                </div>

                                                <div class="align-self-end col-2">
                                                    <a href="webinars/{{ $webinar['slug'] }}"
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
    <!-- End of featured Webinar -->


    <!-- Explore Webinar -->
    <div class="container mt-1 p-5">
        <h1 class="text-center p-5 fs-2"> <b>Explore Webinars</b></h1>
        <div class="row py-4">
            @foreach ($webinarList as $webinar)
                <div class="col-md-4 col-sm-6 mb-5">
                    <div class="card shadow" style="min-height: 480px;">
                        <div class="d-flex justify-content-center">
                            <img src="/images/webinar/{{ $webinar['poster'] }}" class="img-fluid rounded my-2" alt="..."
                                style="max-height: 250px">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title m-font"><b>{{ $webinar['title'] }}</b></h5>

                            <small class="card-text text-muted mb-1">
                                <a href="#"
                                    class="card-text text-decoration-none text-muted xs-font">{{ $webinar['speaker'] }}</a>
                            </small>

                            <h5 class="fw-bold text-blue">Rp 30.000</h5>

                            <small class="card-text text-muted xs-font">
                                <i class="bi bi-clock"></i> {{ $webinar['eventDate'] }}
                            </small>

                            <a href="webinars/{{ $webinar['slug'] }}"
                                class="btn btn-primary btn-main btn-custom mt-auto">Register</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- End of Explore Webinar -->
@endsection
