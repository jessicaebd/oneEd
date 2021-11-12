<?php

use Illuminate\Support\Facades\Route;

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
    return view('index', [
      'title' => 'Home'
    ]);
});

Route::get('/courses', function () {
  return view('courses.index', [
    'title' => 'Courses'
  ]);
});

Route::get('/register', function () {
  return view('register.index', [
    'title' => 'Register'
  ]);
});

Route::get('/register/success', function () {
  return view('register.success', [
    'title' => 'Success'
  ]);
});

Route::get('/login', function () {
  return view('login.index', [
    'title' => 'Login'
  ]);
});
