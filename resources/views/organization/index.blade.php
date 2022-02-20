@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-center py-5 mt-5 align-items-center" style="min-height: 700px;">
        <div class="container">
            <div class="row py-4 justify-content-center">

                <div class="card-profile feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center text-center"
                    style="max-width: 170px">
                    <a href="{{ route('createCourse') }}">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-courses.png" />
                        <div class="card-profile-body">
                            <p class="card-profile-text fw-bold l-font text-dark">Create Course</p>
                        </div>
                    </a>
                </div>

                <div class="card-profile feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center  text-center"
                    style="max-width: 170px">
                    <a href="{{ route('createWebinar') }}">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-webinars.png" />
                        <div class="card-profile-body">
                            <p class="card-profile-text fw-bold l-font text-dark">Create Webinar</p>
                        </div>
                    </a>
                </div>

                <div class="card-profile feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center  text-center"
                    style="max-width: 170px">
                    <a href="{{ route('createCompetition') }}">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-competitions.png" />
                        <div class="card-profile-body">
                            <p class="card-profile-text fw-bold l-font text-dark">Create Competiton</p>
                        </div>
                    </a>
                </div>

                <div class="card-profile feature col-md-3 col-sm-6 mb-2 p-2 m-2 align-items-center  text-center"
                    style="max-width: 170px">
                    <a href="{{ route('createScholarship') }}">
                        <img class="bd-placeholder-img" width="50" height="50" src="/images/icons/icons-scholarships.png" />
                        <div class="card-profile-body">
                            <p class="card-profile-text fw-bold l-font text-dark">Create Scholarship</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
