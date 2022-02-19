@extends('layouts.main')

@section('container')
    <div class="container py-5 mt-5">
        <h1 class="mb-5 fs-3 text-dark text-center"><b>Create New Course</b></h1>

        <div class="row d-flex justify-content-center align-items-center s-font">
            <div class="col-xl-9">
                <div class="card shadow-sm" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Course Title</h6>
                            </div>

                            <div class="col-md-9 pe-5">
                                <input type="text" class="form-control" />
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Price (Rp.)</h6>
                            </div>

                            <div class="col-md-9 pe-5">
                                <input type="text" class="form-control" placeholder="15,000" />
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Duration</h6>
                            </div>

                            <div class="col-md-2 pe-3">
                                <input type="number" class="form-control" min="1" placeholder="0" />
                            </div>

                            <div class="col-md-3 text-start">
                                Weeks
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Description</h6>
                            </div>

                            <div class="col-md-9 pe-5">
                                <textarea class="form-control" rows="5"
                                    placeholder="Describe your course here"></textarea>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Category</h6>
                            </div>

                            <div class="col-md-9 pe-5">
                                <select class="form-select" id="category" required>
                                    <option value="">Choose...</option>
                                    <option>Self Development</option>
                                    <option>Technology</option>
                                    <option>Leadership</option>
                                </select>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Registration Date</h6>
                            </div>

                            <div class="row col-md-9 pe-5">
                                <div class="col-md-6">
                                    <label for="start" class="text-muted">Start date:</label>
                                    <input type="date" class="form-control" id="start" name="trip-start"
                                        value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="start" class="text-muted">End date:</label>
                                    <input type="date" class="form-control" id="start" name="trip-start"
                                        value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Start Date</h6>
                            </div>

                            <div class="row col-md-9 pe-5">
                                <div class="event-date col-md-6">
                                    <input type="date" class="form-control" id="start" name="trip-start"
                                        value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                                </div>

                                <div class="time col-md-6">
                                    <input type="time" id="appt" name="appt" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 class="mb-0">Upload Poster</h6>
                            </div>

                            <div class="col-md-9 pe-5">
                                <input class="form-control" id="formFileLg" type="file" />
                                <div class="small text-muted mt-2">Upload your course poster here.
                                    Max file size 3 MB</div>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="px-5 py-4 text-end">
                            <button type="submit" class="btn btn-custom btn-main px-4 py-2">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
