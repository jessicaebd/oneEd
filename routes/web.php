<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
  $courses_list = [
    [
      'slug' => 'how-to-play-guitar',
      'title' => 'How to Play Guitar',
      'category' => 'music',
      'mentorName' => 'Fiersa Kecili',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 10
    ],
    [
      'slug' => 'math-for-fun',
      'title' => 'Math for Fun',
      'category' => 'math',
      'mentorName' => 'Jojo Winata',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 15
    ],
    [
      'slug' => 'introduction-to-c++',
      'title' => 'Introduction to C++',
      'category' => 'programming',
      'mentorName' => 'Maaruf Amin',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 30
    ],
    [
      'slug' => 'mindfulness',
      'title' => 'Mindfulness',
      'category' => 'mindfulness',
      'mentorName' => 'Kevin Jow',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 12
    ],
    [
      'slug' => 'building-a-future-with-robots',
      'title' => 'Building a Future with Robots',
      'category' => 'technology',
      'mentorName' => 'Morris King',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 15
    ],
    [
      'slug' => 'english-in-focus',
      'title' => 'English in Focus',
      'category' => 'language',
      'mentorName' => 'Simu Liu',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 15
    ],
    [
      'slug' => 'introduction-to-laravel8',
      'title' => 'Introduction to Laravel 8',
      'category' => 'programming',
      'mentorName' => 'Tony Stark',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, praesentium.',
      'duration' => 40
    ],
  ];

  return view('courses.index', [
    'title' => 'Courses',
    'coursesList' => $courses_list
  ]);
})->name('courses');

Route::get('/courses/{slug}', function ($slug) {
  return view('courses.single', [
    'title' => 'Single'
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register/success', [RegisterController::class, 'success']);

Route::post('/logout', [LogoutController::class, 'store'])->middleware('auth');
