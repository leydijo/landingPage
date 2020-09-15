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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/registration', 'App\Http\Controllers\RegistrationController@index')->name('registration.index');
Route::post('/registrationsend', 'App\Http\Controllers\RegistrationController@store')->name('registration.store');
Route::get('/home', 'App\Http\Controllers\RegistrationController@show')->name('registration.show');

Route::get('export', 'App\Http\Controllers\RegistrationController@export')->name('export');;