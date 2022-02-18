@extends('layouts.main')

@section('container')
    <div class="container pt-5 mt-5">
        <h1 class="text-center p-3 mb-3 fs-2"><b>My Scholarships</b></h1>

        <div class="row justify-content-center">
            @foreach ($scholarshipList as $scholarship)
                <div class="card mb-3" style="width: 75%">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex justify-content-center">
                            <img src="/images/scholarship/{{ $scholarship['poster'] }}"
                                class="img-fluid rounded-start my-2" alt="..." style="max-height: 100px">
                        </div>

                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title m-font fw-bold">{{ $scholarship['title'] }}</h5>

                                <div class="row text-dark s-font fw-bold">
                                    <div class="col-12 col-sm-4">
                                        <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
                                        {{ $scholarship['dueDate'] }}
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <img src="/images/icons/time.png" alt="" style="height: 20px;">
                                        {{ $scholarship['time'] }}
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <img src="/images/icons/placeholder.png" alt="" style="height: 20px;"> Email
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
