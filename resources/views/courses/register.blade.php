@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-5 pt-5 pb-4" style="min-height: 1000px;">
        <div class="row d-flex">
            <div class="box-1 col-6 px-5">
                <div class="row flex-lg-row justify-content-center">
                    <div class="mb-3 bg-light justify-content-center"
                        style="min-height: 500px; max-width: 600px; border-radius: 1rem;">

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



                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Remind me for next course's
                                meet</label>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2 mb-3">
                    <div class="dollar-div px-3">
                        <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
                    </div>
                    <div class="d-flex flex-column text-right mr-2"> <span class="current-balance">Current Balance</span>
                        <span class="amount"><span class="dollar-sign">Rp </span>99,000</span>
                    </div>
                </div>

                <div class="box-2">
                    <div class="box-inner-2">
                        <div>
                            <p class="fw-bold">Payment Details</p>
                            <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                        </div>

                        <form class=" p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </form>

                        <div class="d-flex flex-column dis">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Subtotal</p>
                                <p><span class="fas fa-dollar-sign"></span>19.00</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    <p class="pe-2">Discount <span
                                            class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
                                            <span id="code" class="pe-2"></span> <span
                                                class="fas fa-times close"></span> </span> </p>
                                </div>
                                <p><span class="fas fa-dollar-sign"></span>5.00</p>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Total</p>
                                <p class="fw-bold"><span class="fas fa-dollar-sign"></span>16.80</p>
                            </div>


                            {{-- Pay Button --}}
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-custom btn-main" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" style="width: 100%">
                                    Register
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-transparent" style="border: none;">
                                            <div class="modal-body">
                                                <div class="card d-flex text-center">
                                                    <div class="close-button d-flex justify-content-end">
                                                        <button type="button" class="btn-close d-flex justify-content-end"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="card-img p-2">
                                                        <img class="img-fluid" src="/images/icons/lovely.png"
                                                            width="120" height="120">
                                                    </div>

                                                    <div class="card-title text-success pt-2">
                                                        <h1 class="fs-3 fw-bold">Register Success!</h1>
                                                    </div>

                                                    <div class="card-text fw-bolder mb-2">
                                                        <p>Yay! It's a nice order! <br>We will see you soon.</p>
                                                    </div>

                                                    <div class="modal-footer-button">
                                                        <button onclick="location.href='/'" type="button"
                                                            class="btn btn-main p-2" style="width: 100%">
                                                            Go to course</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End of Pay Button --}}

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
