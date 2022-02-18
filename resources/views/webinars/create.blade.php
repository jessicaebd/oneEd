@extends('layouts.main')

@section('container')
    <div class="container py-5 mt-5">
        <h1 class="ms-4 mb-3 fs-3 text-dark text-center"><b>Add Webinar</b></h1>

        <div class="col-sm-6">
            <div class="title my-2">
                <label for="title" class="form-label">Webinar Title</label>
                <input type="text" class="form-control" id="title" placeholder="Webinar Title" value="" required>
            </div>

            <div class="speaker my-2">
                <label for="speaker" class="form-label">Speaker</label>
                <input type="text" class="form-control" id="speaker" placeholder="Speaker" value="" required>
            </div>

            <div class="col-md-5 my-2">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" required>
                    <option value="">Choose...</option>
                    <option>Self Development</option>
                    <option>Technology</option>
                    <option>Leadership</option>
                </select>
            </div>

            <div class="registration-date my-2 col-md-12 d-flex">
                <div class="col-6 me-2">
                    <label for="start">Start date:</label>
                    <input type="date" class="form-control" id="start" name="trip-start" value="<?php echo date('Y-m-d'); ?>"
                        min="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="col-6 ms-2">
                    <label for="start">End date:</label>
                    <input type="date" class="form-control" id="start" name="trip-start" value="<?php echo date('Y-m-d'); ?>"
                        min="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>

            <div class="event-date my-2 col-md-5">
                <label for="start">Event date:</label>
                <input type="date" class="form-control" id="start" name="trip-start" value="<?php echo date('Y-m-d'); ?>"
                    min="<?php echo date('Y-m-d'); ?>">
            </div>

            <div class="time my-2">
                <label for="appt" class="me-2">Choose a time for your webinar:</label>
                <input type="time" id="appt" name="appt" required>
            </div>

            <div class="upload-img my-2">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Poster:</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="submit-btn my-2">
                <form action="#" method="post">
                    <button class="btn btn-custom btn-main" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
