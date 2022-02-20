@extends('layouts.main')

@section('container')
    <div class="bg-light text-dark">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row g-5 py-5">

                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/course/{{ $course['poster'] }}" class="d-block mx-lg-auto img-fluid" alt="..."
                        style="max-height: 400px" loading="lazy">
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

                    <h1 class="m-font fw-bold">What you will learn:</h1>

                    <div class="mt-3 xs-font d-flex fw-bold">
                        <div class="left">
                            <div class="d-flex">
                                <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
                                <p class="m-0">Introduction</p>
                            </div>

                            <div class="d-flex">
                                <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
                                <p class="m-0">Basic Chords</p>
                            </div>
                        </div>

                        <div class="right px-5">
                            <div class="d-flex">
                                <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
                                <p class="m-0">Strumming Pattern</p>
                            </div>

                            <div class="d-flex">
                                <img src="/images/icons/calendar.png" alt="" class="me-2" style="height: 15px;">
                                <p class="m-0">Simple Songs</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                        <a href="/chat" class="btn btn-main btn-custom mt-auto" style="padding: 10px 30px">Open Chat</a>
                        <a href="/meeting/course/{{ $course['slug'] }}" class="btn btn-main btn-custom mt-auto"
                            style="padding: 10px 30px">Join
                            Meeting</a>
                    </div>
                </div>

            </div>

            {{-- Content --}}
            <hr>

            <div class="about">
                <p>
                    <a class="text-blue l-font fw-bold" data-bs-toggle="collapse" href="#aboutCourse" role="button"
                        aria-expanded="false" aria-controls="aboutCourse">
                        About
                    </a>
                </p>

                <div class="collapse" id="aboutCourse">
                    <p class="s-font">Learn how to play guitar! Our Beginner guitar lesson courses will take you
                        from
                        the
                        absolute basics of how to hold and tune a guitar, all the way to being able to play chords,
                        scales
                        and
                        full
                        songs and guitar solos. You’ll feel confident learning with our easy-to-follow lessons that
                        build on
                        your skills
                        slowly, so you move on to the next level with ease.
                    </p><br>
                </div>
            </div>

            <hr>

            <div class="benefit">
                <p>
                    <a class="text-blue l-font fw-bold" data-bs-toggle="collapse" href="#benefitWebinar" role="button"
                        aria-expanded="false" aria-controls="benefitWebinar">
                        Benefits
                    </a>
                </p>

                <div class="collapse" id="benefitWebinar">
                    <div class="mt-5 d-grid gap-3 d-sm-flex justify-content-sm-center text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 feature mb-4">
                                <img class="bd-placeholder-img" width="40" height="40"
                                    src="/images/icons/icons-courses.png" />

                                <h6 class="mt-2 display-10 fw-bold">Free Certificate</h6>
                                <small>
                                    You can get free certificate by joining this webinar.
                                </small>
                            </div>

                            <div class="col-lg-3 feature mb-4">
                                <img class="bd-placeholder-img" width="40" height="40"
                                    src="/images/icons/icons-courses.png" />

                                <h6 class="mt-2 display-10 fw-bold">Worksheet</h6>
                                <small>
                                    We provide worksheets that can help you understand better.
                                </small>
                            </div>

                            <div class="col-lg-3 feature mb-4">
                                <img class="bd-placeholder-img" width="40" height="40"
                                    src="/images/icons/icons-courses.png" />

                                <h6 class="mt-2 display-10 fw-bold">Webinar Recording</h6>
                                <small>
                                    Webinars record videos that you can rewatch anytime, anywhere.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="course-structure">
                <p>
                    <a class="text-blue l-font fw-bold" data-bs-toggle="collapse" href="#courseStructure" role="button"
                        aria-expanded="false" aria-controls="courseStructure">
                        Course Structure
                    </a>
                </p>

                <div class="collapse" id="courseStructure">
                    <p class="s-font">
                        <b>Week 1 - Introduction</b><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
                        possimus repellat. Hic
                        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
                        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit,
                        nihil
                        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita
                        ipsa
                        quas
                        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea
                        adipisci
                        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid
                        nobis
                        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil
                        quos
                        magni consequuntur nemo sit.
                        <br><br>
                        <b>Week 2 - Basic Chords</b><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
                        possimus repellat. Hic
                        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
                        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit,
                        nihil
                        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita
                        ipsa
                        quas
                        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea
                        adipisci
                        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid
                        nobis
                        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil
                        quos
                        magni consequuntur nemo sit.
                        <br><br>
                        <b>Week 3 - Strumming Pattern</b><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
                        possimus repellat. Hic
                        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
                        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit,
                        nihil
                        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita
                        ipsa
                        quas
                        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea
                        adipisci
                        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid
                        nobis
                        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil
                        quos
                        magni consequuntur nemo sit.
                        <br><br>
                        <b>Week 4 - Simple Songs</b><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt aliquid
                        possimus repellat. Hic
                        mollitia exercitationem iusto, sit perferendis placeat tempore non. Quaerat, blanditiis quasi
                        repudiandae, sunt enim numquam optio consequatur ab quibusdam magni est eum ex odio illum sit,
                        nihil
                        molestias. Totam, aliquam. Quos ab ullam atque omnis eveniet pariatur saepe molestiae expedita
                        ipsa
                        quas
                        consequatur voluptatibus illo a quidem repudiandae, in reiciendis corrupti dignissimos ea
                        adipisci
                        itaque totam veniam? Deserunt unde quas architecto molestias facilis! Dolorum totam aliquid
                        nobis
                        repellat eligendi, porro quae impedit commodi laborum nostrum accusamus nam at quasi unde nihil
                        quos
                        magni consequuntur nemo sit.
                    </p>
                </div>
            </div>

            <hr>
            {{-- End of Content --}}

            <div class="mentor mt-5">
                <div class="row justify-content-center">
                    <div class="card shadow mb-3 p-3" style="max-width: 85%; border-radius: 20px;">
                        <h1 class="l-font px-3 pt-4 fw-bold text-muted">Mentor</h1>

                        <div class="row g-0">
                            <div class="col-md-3">
                                <div class="d-flex justify-content-center mt-3">
                                    <img src="/images/webinar-speaker.jpg" class="img-fluid rounded-circle" alt="..."
                                        width="100" height="100">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $course['mentorName'] }}</h5>
                                    <p class="card-text"><small class="text-muted"><i>Founder of
                                                Pringles</i></small>
                                    </p>

                                    <p class="card-text s-font text-muted">Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit. Enim
                                        repudiandae quam culpa error debitis atque quo veritatis totam deleniti
                                        explicabo.
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae
                                        beatae
                                        alias aliquam assumenda, id asperiores iusto laudantium autem nisi?</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
