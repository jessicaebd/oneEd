@extends('layouts.main')

@section('container')
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row g-5 py-5">

      <div class="col-10 col-sm-8 col-lg-6">
        <img src="/images/webinar/{{ $webinar['poster'] }}" class="d-block mx-lg-auto img-fluid" alt="..."
          style="max-height: 400px" loading="lazy">
      </div>

      <div class="col-lg-6">
        <div class="badge rounded-pill bg-blue xs-font px-3 py-1 mb-3 text-light">
          Webinar
        </div>

        <div
          class="badge rounded-pill bg-light border border-secondary xs-font px-3 py-1 mb-3 ms-2 text-secondary fw-bold">
          {{ $webinar['category'] }}
        </div>

        <h1 class="display-5 fs-4 fw-bold lh-1 mb-3">{{ $webinar['title'] }}</h1>

        <hr>

        <div class="row text-dark s-font fw-bold">
          <div class="col-6">
            <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
            {{ $webinar['eventDate'] }}
          </div>
          <div class="col-6">
            <img src="/images/icons/time.png" alt="" style="height: 20px;"> {{ $webinar['time'] }}
          </div>
        </div>
        <div class="text-dark s-font fw-bold mt-3">
          <img src="/images/icons/placeholder.png" alt="" style="height: 20px;"> Zoom
        </div>

        <hr>

        <div class="mt-3 xs-font fw-bold">
          <h1 class="m-font fw-bold">What you will learn:</h1>

          <div class="d-flex">
            <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
            <p class="m-0">Free Certificate</p>
          </div>
          <div class="d-flex">
            <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
            <p class="m-0">Prize</p>
          </div>
        </div>

      </div>

    </div>

    <hr>

    <div class="about">
      <h1 class="text-blue l-font fw-bold">About</h1>
      <p class="s-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
        possimus repellat. Hic
        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa quas
        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
        magni consequuntur nemo sit.
        <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
        possimus repellat. Hic
        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa quas
        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
        magni consequuntur nemo sit.
        <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
        possimus repellat. Hic
        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa quas
        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
        magni consequuntur nemo sit.
      </p>
    </div>

    <hr>

    <div class="benefit">
      <h1 class="text-blue l-font fw-bold">Benefit</h1>
      <ul>
        <li>Free certificate</li>
        <li>Grand prize</li>
        <li>Presentation materials</li>
      </ul>
    </div>

    <hr>

    <div class="container-fluid mt-5">
      <h1 class="text-blue m-font fw-bold">Similar Event</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              @foreach ($webinarList->take(1) as $webinar)
                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex justify-content-center">
                      <img src="/images/webinar//{{ $webinar['poster'] }}" class="img-fluid rounded my-2" alt="..."
                        style="max-height: 150px">
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
              @foreach ($webinarList->slice(1)->take(1) as $webinar)
                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex justify-content-center">
                      <img src="/images/webinar/{{ $webinar['poster'] }}" class="img-fluid rounded my-2" alt="..."
                        style="max-height: 150px">
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

                        {{-- <p class="card-text"><small class="text-muted xs-font">Last updated 3 mins
                                                    ago</small></p> --}}
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
                <div class="card mb-3 bg-light" style="max-width: 1150px; border-radius: 1rem;">
                  <div class="row g-0">
                    <div class="col-md-3 d-flex justify-content-center">
                      <img src="/images/webinar/{{ $webinar['poster'] }}" class="img-fluid rounded my-2" alt="..."
                        style="max-height: 150px">
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

                          <div class="align-self-end col-4">
                            <a href="webinars/{{ $webinar['slug'] }}"
                              class="btn btn-primary btn-main btn-custom mt-auto xs-font">Register
                              Now</a>
                          </div>
                        </div>

                        {{-- <p class="card-text"><small class="text-muted xs-font">Last updated 3 mins
                                                    ago</small></p> --}}
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
  </div>
@endsection
