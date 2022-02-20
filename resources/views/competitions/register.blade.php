@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="left-box col-md-6 px-5">
                <div class="row flex-lg-row justify-content-center">
                    <h1 class="display-5 fs-3 fw-bold lh-1 mb-3 text-center">{{ $competition['title'] }}</h1>

                    <div class="d-flex justify-content-center mb-3">
                        <img src="/images/competition/{{ $competition['poster'] }}" class="img-fluid rounded my-2"
                            alt="..." style="max-height: 300px">
                    </div>

                    <div class="row text-dark s-font fw-bold text-center">
                        <div class="col-12 col-sm-6 mb-2">
                            <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
                            {{ $competition['eventDate'] }}
                        </div>
                        <div class="col-12 col-sm-6 mb-2">
                            <img src="/images/icons/accept.png" alt="" style="height: 20px;">
                            {{ $competition['organizer'] }}
                        </div>
                    </div>

                    <div class="about px-5 py-2 text-center s-font fw- text-muted">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, distinctio?</p>
                    </div>
                </div>
            </div>

            <div class="right-box col-md-6 px-5">
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
                </div>

                <div class="payment-detail">
                    <div>
                        <p class="fw-bold">Payment Details</p>
                        <p class="dis mb-3">Complete your purchase to join competition.</p>
                    </div>

                    <form class="my-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code" value="SALE500">
                            <button type="submit" class="btn btn-dark">Redeem</button>
                        </div>
                    </form>

                    <div class="d-flex flex-column dis mt-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p>Subtotal</p>
                            <p>35.000</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2 text-success">
                            <div class="d-flex align-items-center">
                                <p class="pe-2">Promo Code <br>
                                    <small>SALE500</small>
                                    <span
                                        class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
                                        <span id="code" class="pe-2"></span>
                                        <span class="fas fa-times close"></span>
                                    </span>
                                </p>
                            </div>
                            <p>- 5.000</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p class="fw-bold">Total</p>
                            <p class="fw-bold">Rp 30.000</p>
                        </div>

                        {{-- Pay Button --}}
                        <div class="pay-button d-grid gap-2 d-md-flex justify-content-md-center mt-3">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-custom btn-main" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" style="width: 100%">
                                Pay Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-transparent" style="border: none;">
                                        <div class="modal-body">
                                            <div class="card-profile text-center">
                                                <div class="close-button d-flex justify-content-end">
                                                    <button type="button" class="btn-close d-flex justify-content-end"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="card-img p-2">
                                                    <img class="img-fluid" src="/images/icons/lovely.png" width="120"
                                                        height="120">
                                                </div>

                                                <div class="card-title text-success pt-2">
                                                    <h1 class="fs-3 fw-bold">Register Success!</h1>
                                                </div>

                                                <div class="card-text fw-bolder mb-2">
                                                    <p>Yay! It's a nice order! <br>We will see you soon.</p>
                                                </div>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Remind me
                                                        for the competition schedule</label>
                                                </div>

                                                <br>

                                                <div class="modal-footer-button">
                                                    <button onclick="location.href='/'" type="button"
                                                        class="btn btn-main p-2" style="width: 100%">
                                                        Go to competition</button>
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
