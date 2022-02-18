@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="/css/chat.css">

    <div class="container-fluid pt-5">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="bi bi-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>

                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            @foreach ($webinarList->take(1) as $webinar)
                                <li class="clearfix active">
                                    <img src="/images/webinar/{{ $webinar['poster'] }}" alt="avatar"
                                        class="rounded-circle" width="50" height="50">

                                    <div class="about">
                                        <div class="name fw-bold">{{ Str::limit($webinar['title'], 15) }}</div>
                                        <div class="status">7 mins ago</div>
                                    </div>
                                </li>
                            @endforeach

                            @foreach ($webinarList->slice(1) as $webinar)
                                <li class="clearfix">
                                    <img src="/images/webinar/{{ $webinar['poster'] }}" alt="avatar"
                                        class="rounded-circle" width="50" height="50">

                                    <div class="about">
                                        <div class="name fw-bold">{{ Str::limit($webinar['title'], 15) }}</div>
                                        <div class="status">7 mins ago</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="chat">
                        {{-- Chat Header --}}
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-11">
                                    <img src="/images/webinar/webinar-1.jpeg" alt="avatar"
                                        class="rounded-circle border border-secondary" width="45" height="45">

                                    <div class="chat-about">
                                        <h6 class="m-b-0 fw-bold">INDUSTRIAL SHARING: "What's the Culture like to Work in
                                            Educational Industry"</h6>
                                        <small>160 members</small>
                                    </div>
                                </div>

                                <div class="col-lg-1 hidden-sm text-right">
                                    <button class="btn btn-outline-secondary">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- End of Chat Header --}}

                        {{-- Chat History --}}
                        <div class="chat-history">
                            <ul class="m-b-0">
                                <li class="clearfix">
                                    <div class="message other-message float-right">
                                        Hi, how can I get today's webinar
                                        meeting link?
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">10:12 AM, MJ</span>
                                    </div>
                                    <div class="message my-message">Are we meeting today?</div>
                                </li>

                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time text-success fw-bold">10:15 AM, Organizer</span>
                                    </div>
                                    <div class="message my-message" style="background-color: rgb(202, 247, 202);">Hi! You
                                        can join the
                                        meeting through this
                                        link
                                        <span class="text-primary">bit.ly/webinar23</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- End of Chat History --}}

                        <div class="chat-message clearfix">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter text here...">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-send"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
