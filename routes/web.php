<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
// use App\Http\Controllers\ClassController;

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
Route::resource('teachers', TeacherController::class);
Route::get('/dashboard','App\Http\Controllers\HomeController@dashboard');
Route::get('/dashboard2','App\Http\Controllers\HomeController@dashboard2');
Route::get('/dashboard3','App\Http\Controllers\HomeController@dashboard3');

// Route::get('/login','App\Http\Controllers\AuthController@login');
// Route::post('/login','App\Http\Controllers\AuthController@loginPost');

// Route::get('/register','App\Http\Controllers\AuthController@register');
// Route::post('/register','App\Http\Controllers\AuthController@registerPost');

Route::get('/forgotPassword','App\Http\Controllers\AuthController@forgotPassword');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes for classes index
Route::get('/classes','App\Http\Controllers\ClassController@index');

//route for classes create
Route::get('/classes/create','App\Http\Controllers\ClassController@create');

//routes for classses create to store values
Route::post('/classes/store','App\Http\Controllers\ClassController@store');

//route for classes show 
Route::get('classes/{class_id}','App\Http\Controllers\ClassController@show');