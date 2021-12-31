<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Course;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register/success', [RegisterController::class, 'success']);

Route::post('/logout', [LogoutController::class, 'store'])->middleware('auth');
