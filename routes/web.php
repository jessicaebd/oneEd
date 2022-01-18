<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Competition;
use App\Models\Course;
use App\Models\Scholarship;
use App\Models\Webinar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home.index', [
    'title' => 'Home'
  ]);
})->name('home');

Route::get('/courses', function () {
  return view('courses.index', [
    'title' => 'Courses',
    'coursesList' => Course::all()
  ]);
})->name('courses');

Route::get('/courses/{slug}', function ($slug) {
  return view('courses.single', [
    'title' => 'Course',
    'course' => Course::find($slug)
  ]);
});

Route::get('/webinars', function () {
  return view('webinars.index', [
    'title' => 'Webinars',
    'webinarList' => Webinar::all()
  ]);
})->name('webinars');

Route::get('/webinars/{slug}', function ($slug) {
  return view('webinars.single', [
    'title' => 'Webinar',
    'webinar' => Webinar::find($slug)
  ]);
});

Route::get('/competitions', function () {
  return view('competitions.index', [
    'title' => 'Competitions',
    'competitionList' => Competition::all()
  ]);
})->name('competitions');

Route::get('/competitions/{slug}', function ($slug) {
  return view('competitions.single', [
    'title' => 'Competition',
    'competition' => Competition::find($slug)
  ]);
});

Route::get('/scholarships', function () {
  return view('scholarships.index', [
    'title' => 'Scholarships',
    'scholarshipList' => Scholarship::all()
  ]);
})->name('scholarships');

Route::get('/scholarships/{slug}', function ($slug) {
  return view('scholarships.single', [
    'title' => 'Scholarship',
    'scholarship' => Scholarship::find($slug)
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register/success', [RegisterController::class, 'success']);

Route::post('/logout', [LogoutController::class, 'store'])->middleware('auth');
