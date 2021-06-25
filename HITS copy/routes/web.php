<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MailController;

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
    return view('toppage');
});

Route::get('/toppage', function () {
    return view('toppage');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/input_confirmation', function () {
    return view('input_confirmation');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Execute index in a class defined in App\Http\Controllers\HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

// Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');

// Execute create in a class defined in App\Http\Controllers\Auth\RegisterController
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

// Execute store in a class defined in App\Http\Controllers\Auth\RegisterController
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])
    ->middleware('guest');

// Route::get('auth/login', 'Auth\LoginController@showLoginForm');
// Route::post('auth/login', 'Auth\LoginController@Login');

// Execute index in a class defined in App\Http\Controllers\Auth\LoginController
Route::get('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');

// Execute Authenticate in a class defined in App\Http\Controllers\Auth\LoginController
Route::post('/auth/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])
    ->middleware('guest');

// Execute logout in a class defined in App\Http\Controllers\Auth\LoginController
Route::get('/auth/logout', [App\Http\Controllers\Auth\LoginController::Class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::POST('/auth/logout', [App\Http\Controllers\Auth\LoginController::Class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// added in 24th May 2021 cf.https://www.youtube.com/watch?v=kWEvrHVg8kI&ab_channel=SurfsideMedia
Route::get('/send-email',[MailController::class,'sendEmail']);