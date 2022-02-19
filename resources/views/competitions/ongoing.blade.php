@extends('layouts.main')

@section('container')
  <div class="container pt-5 mt-5">
    <h1 class="text-center p-3 mb-3 fs-2"><b>My Competitions</b></h1>

    <div class="row justify-content-center">
      @foreach ($competitionList as $competition)
        <div class="card mb-3" style="width: 75%">
          <div class="row g-0">
            <div class="col-md-2 d-flex justify-content-center">
              <img src="/images/competition/{{ $competition['poster'] }}" class="img-fluid rounded-start my-2" alt="..."
                style="max-height: 100px">
            </div>

            <div class="col-md-10">
              <div class="card-body">
                <a href="/dashboard/mycompetitions/{{ $competition['slug'] }}">
                  <h5 class="card-title m-font fw-bold">{{ $competition['title'] }}</h5>
                </a>

                <div class="row text-dark s-font fw-bold">
                  <div class="col-12 col-sm-6 mb-2">
                    <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
                    {{ $competition['eventDate'] }}
                  </div>

                  <div class="col-12 col-sm-6 mb-2">
                    <img src="/images/icons/accept.png" alt="" style="height: 20px;">
                    {{ $competition['organizer'] }}
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
