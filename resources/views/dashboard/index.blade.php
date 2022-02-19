@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-center py-5 mt-5">
        <div class="card-profile">
            <div class="d-flex align-items-center "> <img src="/images/peter.jpg" class="img profile-image rounded-pill"
                    width="150" height="150">
                <div class="ms-5">
                    <h5 class="text-dark m-font fw-bold">Peter Parker <small
                            class="text-muted ms-2 fw-normal xs-font">Student</small>
                    </h5>
                    <p class="text-muted s-font">peterparker@zmail.com</p>
                    <button type="button" class="btn btn-custom btn-main px-3">Edit Profile</button>

                </div>


            </div>

            <div class="current-balance d-flex justify-content-between align-items-center mt-3 p-2 mb-3">
                <div class="dollar-div px-3">
                    <div class="round-div">
                        <i class="bi bi-currency-dollar l-font text-muted"></i>
                    </div>
                </div>

                <div class="d-flex flex-column text-right mr-2">
                    <span class="m-font fw-bold">Current Balance</span>
                    <span class="m-font fw-bold text-blue">Rp 99.000</span>
                </div>

                <button type="button" class="btn btn-custom btn-main px-3">Top Up</button>
            </div>

            <div class="recent-border mt-4">
                <span class="recent-orders">Recent orders</span>
            </div>

            <div class="orders-profile-border pt-2">
                <span class="orders-profile">INDUSTRIAL SHARING: "What's the Culture like to
                    Work in Educational Industry"</span>
            </div>

            <div class="orders-profile-border pt-2">
                <span class="orders-profile">STUDIUM GENERALE: "Entrepreneurship in Time of Crisis"</span>
            </div>
        </div>
    </div>

    <div class="container mb-5 py-5 text-center mx-auto content">

        <h3 class="display-10 fw-bold mb-3">Current Progress</h3>

        {{-- Features --}}
        <div class="row py-4 justify-content-center">
            @foreach ($featureList as $feature)
                <div class="card-profile feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center"
                    style="max-width: 170px">
                    <a href="/dashboard/{{ $feature['slug'] }}">
                        <img class="bd-placeholder-img mt-2" width="50" height="50"
                            src="/images/icons/{{ $feature['icon'] }}" />

                        <div class="card-profile-body">
                            <h6 class="mt-2 display-10 fw-bold text-dark">{{ $feature['name'] }}</h6>
                            <p class="card-profile-text fw-bold l-font text-dark">{{ $feature['total'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        {{-- End of Features --}}
    </div>
@endsection
