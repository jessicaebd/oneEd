@extends('layouts.main')

@section('container')
  <!-- Jumbotron -->
  <div
    class="jumbotron d-flex justify-content-left align-items-center bg-transparent mt-5 animate__animated animate__fadeIn animate_slower">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-8 animate__animated animate__pulse animate__infinite ">
          <h1 style="font-size: 2 em;">
            <b>Belajar, Webinar,
              Lomba, dan Beasiswa
            </b>
          </h1>
          <h1 style="font-size: 2 em; color: rgb(72, 40, 187);">
            <b>Dalam Satu Aplikasi
            </b>
          </h1>
          <a href="register" class="btn btn-primary fs-5 py-3 px-4 btn-custom mt-2">Yuk Join,
            <b>GRATIS!</b></a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Jumbotron -->
  <div class="px-4 py-5 my-5 mb-5 text-center">
    {{-- <img
    class="d-block mx-auto mb-4"
    src="../assets/brand/bootstrap-logo.svg"
    alt=""
    width="72"
    height="57"
  /> --}}
    <h3 class="display-10 fw-bold mb-3">What we provide</h3>
    <div class="col-lg-6 mx-auto">
      <p class="mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
        voluptatem.
      </p>
      {{-- Features --}}
      <div class="mt-5 d-grid gap-2 d-sm-flex justify-content-sm-center">
        <div class="row">

          {{-- Feature --}}
          <div class="col-lg-3">
            <a href="/courses">
              <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-courses.png" />
            </a>
            <h6 class="mt-4 display-10 fw-bold">Courses</h6>
            <small>
              Lorem ipsum dolor sit amet.
            </small>
          </div>
          {{-- End of Feature --}}

          {{-- Feature --}}
          <div class="col-lg-3">
            <a href="/webinars">
              <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-webinars.png" />
            </a>
            <h6 class="mt-4 display-10 fw-bold">Webinars</h6>
            <small>
              Lorem ipsum dolor sit amet.
            </small>
          </div>
          {{-- End of Feature --}}

          {{-- Feature --}}
          <div class="col-lg-3">
            <a href="/competitions">
              <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-competitions.png" />
            </a>
            <h6 class="mt-4 display-10 fw-bold">Competitions</h6>
            <small>
              Lorem ipsum dolor sit amet.
            </small>
          </div>
          {{-- End of Feature --}}

          {{-- Feature --}}
          <div class="col-lg-3">
            <a href="/scholarships">
              <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-scholarships.png" />
            </a>
            <h6 class="mt-4 display-10 fw-bold">Scholarships</h6>
            <small>
              Lorem ipsum dolor sit amet.
            </small>
          </div>
          {{-- End of Feature --}}

        </div>
      </div>
      {{-- End of Features --}}
    </div>
    <!-- End Jumbotron -->


    <!-- START THE FEATURETTES -->

    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
              mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some
            exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
              yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an
            idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again,
            not really intended to be actually read, simply here to give you a better view of what this would
            look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">


      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
              yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an
            idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>


      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
  </div>



  </div>


@endsection
