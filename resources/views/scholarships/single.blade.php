@extends('layouts.main')

@section('container')
    <div class="bg-light text-dark">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row g-5 py-5">

                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/scholarship/{{ $scholarship['poster'] }}" class="d-block mx-lg-auto img-fluid"
                        alt="..." style="max-height: 400px" loading="lazy">
                </div>

                <div class="col-lg-6">
                    <div class="badge rounded-pill bg-blue xs-font px-3 py-1 mb-3 text-light">
                        Scholarship
                    </div>

                    <div
                        class="badge rounded-pill bg-light border border-secondary xs-font px-3 py-1 mb-3 ms-2 text-secondary fw-bold">
                        {{ $scholarship['category'] }}
                    </div>

                    <h1 class="display-5 fs-4 fw-bold lh-1 mb-3">{{ $scholarship['title'] }}</h1>

                    <hr>

                    <div class="row text-dark s-font fw-bold">
                        <div class="col-6">
                            <img src="/images/icons/calendar.png" alt="" style="height: 20px;">
                            {{ $scholarship['dueDate'] }}
                        </div>
                        <div class="col-6">
                            <img src="/images/icons/time.png" alt="" style="height: 20px;"> {{ $scholarship['time'] }}
                        </div>
                    </div>
                    <div class="text-dark s-font fw-bold mt-3">
                        <img src="/images/icons/placeholder.png" alt="" style="height: 20px;"> Zoom
                    </div>

                    <hr>

                    <div class="mt-3 xs-font fw-bold">
                        <h1 class="m-font fw-bold">What you will get:</h1>

                        <div class="d-flex">
                            <img src="/images/icons/tick.png" alt="" class="me-2" style="height: 15px;">
                            <p class="m-0">Scholarship Program</p>
                        </div>
                        <div class="d-flex">
                            <img src="/images/icons/tick.png" alt="" class="me-2" style="height: 15px;">
                            <p class="m-0">Pocket Money</p>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                        <a href="{{ $scholarship['slug'] }}/register" class="btn btn-main btn-custom mt-auto"
                            style="padding: 10px 30px">Register</a>
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
                    <li>Scholarship grantee certificate</li>
                    <li>Study scholarship</li>
                    <li>Relationship with other grantee</li>
                </ul>
            </div>
        </div>


    </div>
@endsection
