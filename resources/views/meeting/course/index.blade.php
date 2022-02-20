@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-center flex-column py-5 mt-5">

        <div>
            <h1 class="display-5 fs-4 fw-bold lh-1 mb-3">{{ $course['title'] }} Class</h1>
        </div>
        <div class="text-center">
            <img src="/images/meeting/zoom-meeting.jpg" alt="zoom-meeting">
        </div>
    </div>
@endsection
