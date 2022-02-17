@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card">
            <div class="top-container "> <img src="/images/peter.jpg" class="img profile-image rounded-pill" width="150"
                    height="150">
                <div class="ms-5">
                    <h5 class="name">Peter Parker <small class="text-muted ms-2 fw-normal xs-font">Student</small>
                    </h5>
                    <p class="mail">peterparker@zmail.com</p>
                    <button type="button" class="btn btn-custom btn-main px-3">Edit Profile</button>

                </div>


            </div>

            <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
                <div class="dollar-div px-3">
                    <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
                </div>
                <div class="d-flex flex-column text-right mr-2"> <span class="current-balance">Current Balance</span> <span
                        class="amount"><span class="dollar-sign">Rp </span>99,000</span> </div>
            </div>

            <div class="recent-border mt-4">
                <span class="recent-orders">Recent orders</span>
            </div>

            <div class="wishlist-border pt-2">
                <span class="wishlist">INDUSTRIAL SHARING: "What's the Culture like to
                    Work in Educational Industry"</span>
            </div>
            <div class="fashion-studio-border pt-2">
                <span class="fashion-studio">STUDIUM GENERALE: "Entrepreneurship in Time of Crisis"</span>
            </div>
        </div>
    </div>

    <div class="container mb-5 py-5 text-center mx-auto content">

        <h3 class="display-10 fw-bold mb-3">Current Progress</h3>

        {{-- Features --}}
        <div class="row py-4 justify-content-center">
            @foreach ($featureList as $feature)
                <div class="card feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center" style="max-width: 170px">
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
