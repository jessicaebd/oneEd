@extends('layouts.main')

@section('container')
    <div class="bg-dark text-light">
        <div class="container col-xxl-8 px-4 pt-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/webinar/{{ $webinar['poster'] }}" class="d-block mx-lg-auto img-fluid" alt="..."
                        style="max-height: 400px" loading="lazy">
                </div>

                <div class="col-lg-6">

                    <h1 class="display-5 fs-4 fw-bold lh-1 mb-3">{{ $webinar['title'] }}</h1>
                    <p class="lead s-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet reprehenderit
                        aut quia cupiditate excepturi asperiores?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </div>
</div @endsection
