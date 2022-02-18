@extends('layouts.main')

@section('container')
  <div class="bg-light text-dark">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row g-5 py-5">

        <div class="col-10 col-sm-8 col-lg-6">
          <img src="https://source.unsplash.com/1600x900?{{ $course['title'] }}" class="d-block mx-lg-auto img-fluid"
            alt="..." style="max-height: 400px" loading="lazy">
        </div>

        <div class="col-lg-6">
          <div class="badge rounded-pill bg-blue xs-font px-3 py-1 mb-3 text-light">
            Course
          </div>

          <div
            class="badge rounded-pill bg-light border border-secondary xs-font px-3 py-1 mb-3 ms-2 text-secondary fw-bold">
            {{ $course['category'] }}
          </div>

          <h1 class="display-5 fs-4 fw-bold lh-1 mb-3">{{ $course['title'] }}</h1>

          <hr>

          <div class="row text-dark s-font fw-bold">
            <div class="col-6">
              <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
              Every Saturday
            </div>
            <div class="col-6">
              <img src="/images/icons/time.png" alt="" style="height: 20px;"> 6:00 p.m. - 8:00 p.m.
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
              <p class="m-0">Introduction</p>
            </div>
            <div class="d-flex">
              <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
              <p class="m-0">Basic Chords</p>
            </div>
            <div class="d-flex">
              <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
              <p class="m-0">Strumming Pattern</p>
            </div>
            <div class="d-flex">
              <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
              <p class="m-0">Simple Songs</p>
            </div>
          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <a href="{{ $course['slug'] }}/register" class="btn btn-main btn-custom mt-auto fw-bolder"
              style="padding: 10px 35px">Register</a>
          </div>
        </div>

      </div>

      <hr>

      <div class="about">
        <h1 class="text-blue l-font fw-bold">About</h1>
        <p class="s-font">Learn how to play guitar! Our Beginner guitar lesson courses will take you from the
          absolute basics of how to hold and tune a guitar, all the way to being able to play chords, scales and full
          songs and guitar solos. You’ll feel confident learning with our easy-to-follow lessons that build on your skills
          slowly, so you move on to the next level with ease.
        </p><br>
        <h1 class="text-blue l-font fw-bold">Course Structure</h1>
        <p class="s-font">
          <b>Week 1 - Introduction</b><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
          possimus repellat. Hic
          mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
          repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
          molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa
          quas
          consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
          itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
          repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
          magni consequuntur nemo sit.
          <br><br>
          <b>Week 2 - Basic Chords</b><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
          possimus repellat. Hic
          mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
          repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
          molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa
          quas
          consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
          itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
          repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
          magni consequuntur nemo sit.
          <br><br>
          <b>Week 3 - Strumming Pattern</b><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
          possimus repellat. Hic
          mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
          repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
          molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa
          quas
          consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea adipisci
          itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid nobis
          repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil quos
          magni consequuntur nemo sit.
          <br><br>
          <b>Week 4 - Simple Songs</b><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
          possimus repellat. Hic
          mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
          repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit, nihil
          molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita ipsa
          quas
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
    </div>


  </div>
@endsection
