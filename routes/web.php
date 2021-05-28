<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\TheatreController;
use App\Http\Controllers\CityController;
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

Route::get('admin/home',function (){
   return view('admin.home');
});

Route::resource('admin/movie',movieController::class);
Route::resource('admin/cast',CastController::class);
Route::resource('admin/theatre',TheatreController::class);
Route::resource('admin/city',CityController::class);
