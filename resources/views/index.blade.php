@extends('layouts.main')

@section('container')
  <!-- Jumbotron -->
  <div
    class="jumbotron d-flex justify-content-left align-items-center bg-transparent mt-5 animate__animated animate__fadeIn animate_slower">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-8 animate__animated animate__pulse animate__infinite ">
          <h1 style="font-size: 3.5em;">
            <b>Belajar, Webinar,
              Lomba, dan Beasiswa
            </b>
          </h1>
          <h1 style="font-size: 3.5em; color: rgb(72, 40, 187);">
            <b>Dalam Satu Aplikasi
            </b>
          </h1>
          <a href="register" class="btn btn-primary fs-5 py-3 px-4 btn-custom mt-2">Yuk Join,
            <b>GRATIS!</b></a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End Jumbotron -->

<!-- Jumbotron -->
<div class="px-4 py-5 my-5 text-center">
  <img
    class="d-block mx-auto mb-4"
    src="../assets/brand/bootstrap-logo.svg"
    alt=""
    width="72"
    height="57"
  />
  <h3 class="display-10 fw-bold">What we provide</h3>
  <div class="col-lg-6 mx-auto">
    <p class="mb-4">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
      voluptatem.
    </p>
    {{-- Features --}}
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <div class="row">

        {{-- Feature --}}
        <div class="col-lg-3">
          <a href="/courses">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="50"
              height="50"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 50x50"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Courses</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
          </a>
          <h6 class="mt-4">Courses</h6>
          <small>
            Lorem ipsum dolor sit amet.
          </small>
        </div>
        {{-- End of Feature --}} 
        
        {{-- Feature --}}
        <div class="col-lg-3">
          <a href="/webinars">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="50"
              height="50"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 50x50"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Webinar</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
          </a>
          <h6 class="mt-4">Courses</h6>
          <small>
            Lorem ipsum dolor sit amet.
          </small>
        </div>
        {{-- End of Feature --}} 
        
        {{-- Feature --}}
        <div class="col-lg-3">
          <a href="/courses">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="50"
              height="50"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 50x50"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Course</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
          </a>
          <h6 class="mt-4">Courses</h6>
          <small>
            Lorem ipsum dolor sit amet.
          </small>
        </div>
        {{-- End of Feature --}} 
        
        {{-- Feature --}}
        <div class="col-lg-3">
          <a href="/courses">
            <svg
              class="bd-placeholder-img rounded-circle"
              width="50"
              height="50"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: 50x50"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <title>Course</title>
              <rect width="100%" height="100%" fill="#777" />
              <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            </svg>
          </a>
          <h6 class="mt-4">Courses</h6>
          <small>
            Lorem ipsum dolor sit amet.
          </small>
        </div>
        {{-- End of Feature --}}
      </div>
      {{-- End of Features --}}
    </div>
  </div>
  <!-- End Jumbotron -->
</div>


@endsection