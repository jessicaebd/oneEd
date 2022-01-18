@extends('layouts.main')

@section('container')
    <div class="container-fluid col-xxl-8 px-4 py-5 bg-dark text-light">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://source.unsplash.com/1600x900?{{ $webinar['category'] }}"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>

                <div class="col-lg-6">
                    <p>
                        <a href="#" class="text-blue">Course</a>
                        /
                        <a href="" class="text-blue">{{ $webinar['category'] }}</a>
                    </p>
                    <h1 class="display-5 fs-3 fw-bold lh-1 mb-3">{{ $webinar['title'] }}</h1>

                    <small class="text-muted">
                        <a href="#" class="text-decoration-none text-muted">{{ $webinar['speaker'] }}</a>
                        |
                        <i class="bi bi-hourglass-split"></i> {{ $webinar['duration'] }} weeks long
                    </small>

                    <p class="lead fs-5">{{ $webinar['description'] }}</p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-custom btn-main btn-lg px-4 me-md-2">Join Course</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
