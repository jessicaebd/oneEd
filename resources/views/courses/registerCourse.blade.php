@extends('layouts.main')

@section('container')
    <div class="bg-light text-dark">
        <div class="container-fluid mt-5 pt-5 pb-4 bg-grey" style="min-height: 1000px;">
            <div class="row flex-lg-row py-5 justify-content-center">

                <div class="card mb-3 bg-light justify-content-center"
                    style="min-height: 700px; max-width: 800px; border-radius: 1rem;">

                    <h1 class="display-5 fs-1 fw-bold lh-1 mb-3 text-center">{{ $course['title'] }}</h1>


                    <div class="justify-content-center">
                        <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}"
                            class="d-block mx-lg-auto img-fluid" alt="..." style="max-height: 400px" loading="lazy">
                    </div>

                    <br>

                    <div class="row text-dark s-font fw-bold text-center">
                        <div class="col-12 col-sm-4">
                            <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
                            Every Saturday
                        </div>
                        <div class="col-12 col-sm-4">
                            <img src="/images/icons/time.png" alt="" style="height: 20px;"> 6:00 p.m. - 8:00 p.m.
                        </div>
                        <div class="col-12 col-sm-4">
                            <img src="/images/icons/placeholder.png" alt="" style="height: 20px;"> Zoom
                        </div>
                    </div>


                    <br>

                    <h1 class="text-blue l-font fw-bold">You have successfully registered to this course!</h1>
                    <hr>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Remind me for next course's
                            meet</label>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                        <a href="/courses" class="btn btn-main btn-custom mt-auto fw-bolder" style="padding: 10px 35px">Back
                            to Courses</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection