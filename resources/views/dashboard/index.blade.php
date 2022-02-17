@extends('layouts.main')

@section('container')
    <div class="container pt-5 mt-5">
        <div class=" mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="https://source.unsplash.com/900x900?person" class="img-fluid rounded" alt="..."
                        style="height: 200px; width: 200px;">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Peter Parker</h5>
                        <button type="button" class="btn btn-custon bg-blue text-light">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container mb-5 py-5 text-center mx-auto content">

        <h3 class="display-10 fw-bold mb-3">Current Progress</h3>

        {{-- Features --}}
        <div class="row py-4 justify-content-center">
            @foreach ($featureList as $feature)
                <div class="card col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center" style="max-width: 170px">
                    <a href="/webinars">
                        <img class="bd-placeholder-img mt-2" width="50" height="50"
                            src="/images/icons/{{ $feature['icon'] }}" />
                    </a>

                    <div class="card-body">
                        <h6 class="mt-2 display-10 fw-bold">{{ $feature['name'] }}</h6>
                        <p class="card-text fw-bold l-font">{{ $feature['total'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- End of Features --}}
    </div>
@endsection
