@extends('layouts.main')

@section('container')
    <!-- Explore Courses -->
    <div class="container mt-5">
        <h1 class="text-center p-5"> <b>Explore Courses</b></h1>
        <div class="row">

            @foreach ($coursesList as $course)

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card" style="min-height: 415px;">
                        <img src="https://source.unsplash.com/1600x900?{{ $course['category'] }}" class="card-img-top"
                            alt="...">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>{{ $course['title'] }}</b></h5>

                            <small class="card-text mb-1">
                                <a href="#"
                                    class="card-text text-decoration-none text-muted">{{ $course['mentorName'] }}</a>
                            </small>

                            <p class="card-text">{{ $course['description'] }}</p>

                            <small class="card-text text-muted">
                                <i class="bi bi-hourglass-split"></i> {{ $course['duration'] }} weeks long
                            </small>

                            <a href="courses/{{ $course['slug'] }}" class="btn btn-primary btn-custom mt-auto">See
                                Course</a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
    <!-- End of Explore Courses -->

    <!-- Featured Courses -->

    <!-- End of featured Courses -->
@endsection
