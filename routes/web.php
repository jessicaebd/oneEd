<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', function () {
  return view('login.index', [
    'title' => 'Login'
  ]);
});


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register/success', [RegisterController::class, 'success']);
