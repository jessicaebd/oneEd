<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Competition;
use App\Models\Course;
use App\Models\Feature;
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

Route::get('/chat', function () {
  return view('chat.index', [
    'title' => 'Chat',
    'webinarList' => Webinar::all()
  ]);
})->name('chat');

Route::get('/dashboard', function () {
  return view('dashboard.index', [
    'title' => 'Dashboard',
    'featureList' => Feature::all()
  ]);
})->name('dashboard');

Route::get('/dashboard/aboutUs', function () {
  return view('dashboard.about-us', [
    'title' => 'About Us',
  ]);
})->name('aboutUs');

Route::get('/dashboard/mycourses', function () {
  return view('courses.ongoing', [
    'title' => 'My Courses',
    'coursesList' => Course::all()
  ]);
})->name('Courses');

Route::get('/dashboard/mywebinars', function () {
  return view('webinars.ongoing', [
    'title' => 'My Webinars',
    'webinarList' => Webinar::all()
  ]);
})->name('Webinars');

Route::get('/dashboard/mywebinars/{slug}', function ($slug) {
  return view('webinars.ongoingSingle', [
    'title' => 'Webinar',
    'webinarList' => Webinar::all(),
    'webinar' => Webinar::find($slug)
  ]);
});

Route::get('/dashboard/mycourses/{slug}', function ($slug) {
  return view('courses.ongoingSingle', [
    'title' => 'Courses',
    'courseList' => Course::all(),
    'course' => Course::find($slug)
  ]);
});

Route::get('/dashboard/mycompetitions', function () {
  return view('competitions.ongoing', [
    'title' => 'My Competitions',
    'competitionList' => Competition::all()
  ]);
})->name('Competitions');

Route::get('/dashboard/mycompetitions/{slug}', function ($slug) {
  return view('competitions.ongoingSingle', [
    'title' => 'Competition',
    'competition' => Competition::find($slug)
  ]);
})->name('Competitions');

Route::get('/dashboard/myscholarships', function () {
  return view('scholarships.ongoing', [
    'title' => 'My Scholarship',
    'scholarshipList' => Scholarship::all()
  ]);
})->name('Scholarships');

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

Route::get('/courses/{slug}/register', function ($slug) {
  return view('courses.register', [
    'title' => 'Register Course',
    'course' => Course::find($slug)
  ]);
});

Route::get('/webinars', function () {
  return view('webinars.index', [
    'title' => 'Webinars',
    'webinarList' => Webinar::all()
  ]);
})->name('webinars');


// Create New Post
Route::get('/createCompetition', function () {
  return view('competitions.create', [
    'title' => 'Create Competition'
  ]);
})->name('createCompetition');

Route::get('/createCourse', function () {
  return view('courses.create', [
    'title' => 'Create Course'
  ]);
})->name('createCourse');

Route::get('/createScholarship', function () {
  return view('scholarships.create', [
    'title' => 'Create Scholarship'
  ]);
})->name('createScholarship');

Route::get('/createWebinar', function () {
  return view('webinars.create', [
    'title' => 'Create Webinar'
  ]);
})->name('createWebinar');

// End of Create New Post


Route::get('/webinars/{slug}', function ($slug) {
  return view('webinars.single', [
    'title' => 'Webinar',
    'webinarList' => Webinar::all(),
    'webinar' => Webinar::find($slug)
  ]);
});

Route::get('/webinars/{slug}/register', function ($slug) {
  return view('webinars.register', [
    'title' => 'Register Webinar',
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

Route::get('/competitions/{slug}/register', function ($slug) {
  return view('competitions.register', [
    'title' => 'Register Competition',
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

Route::get('/scholarships/{slug}/register', function ($slug) {
  return view('scholarships.register', [
    'title' => 'Register Scholarship',
    'scholarship' => Scholarship::find($slug)
  ]);
});

Route::get('/organize', function () {
  return view('organization.index', [
    'title' => 'Organize Event'
  ]);
})->name('organize');

Route::get('/meeting/course/{slug}', function ($slug) {
  return view('meeting.course.index', [
    'title' => 'Live Meeting Course',
    'course' => Course::find($slug)
  ]);
});

Route::get('/meeting/webinar/{slug}', function ($slug) {
  return view('meeting.webinar.index', [
    'title' => 'Webinar Meeting',
    'webinar' => Webinar::find($slug)
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register/success', [RegisterController::class, 'success']);

Route::post('/logout', [LogoutController::class, 'store'])->middleware('auth');
