<?php

use App\Http\Controllers\User\MoviedisplayController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\admin\CastController;
use App\Http\Controllers\admin\movieController;
use App\Http\Controllers\admin\TheatreController;
use App\Http\Controllers\admin\SeatController;
use App\Http\Controllers\User\BookTicketsController;
use App\Http\Controllers\admin\CityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;




Route::get('/', [HomeController::class,'index'])->middleware('auth');

Route::get('post/{id}',[MoviedisplayController::class,'post'])->name('post');

Route::get('theater/{id}',[MoviedisplayController::class,'theater'])->name('theater');

Route::post('book/bookticket/{theatre}',[BookTicketsController::class,'bookmyticket'])->name('bookmyticket');

Route::get('post/cast/{id}',[HomeController::class,'casts'])->name('cast');




Route::get('admin/home',function (){
   return view('admin.home');
});
Route::get('admin-login',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::post('admin-login',[LoginController::class,'login']);

Route::resource('admin/movie',movieController::class);
Route::resource('admin/cast',CastController::class);
Route::resource('admin/theatre',TheatreController::class);
Route::resource('admin/seats',SeatController::class);
Route::resource('admin/city',CityController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
