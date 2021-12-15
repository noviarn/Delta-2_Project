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
	if(Auth::check())
	{
	    return Redirect::to('/home'); 
	}
	return view('login');
})->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'viewRegister'])->name('view.register');
Route::post('/postlogin', [App\Http\Controllers\AuthController::class, 'postLogin'])->name('login.perform');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.perform');

Route::middleware(['auth'])->group(function () {	 
	Route::get('/home', [App\Http\Controllers\DashboardController::class, 'home'])->name('view.home');
	Route::get('/home/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'konsultasi'])->name('view.konsultasi');
	Route::post('/home/konsultasi/submitted/{id}', [App\Http\Controllers\KonsultasiController::class, 'konsultasiSubmitted'])->name('konsultasi.submitted');
	Route::get('/home/konsultasi/hasil/{id}', [App\Http\Controllers\KonsultasiController::class, 'hasilkonsultasi'])->name('view.hasilkonsultasi');
	Route::get('/home/data-kerusakan', [App\Http\Controllers\DashboardController::class, 'datakerusakan'])->name('view.data-kerusakan');
	Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('view.profile');
	Route::get('/home/history', [App\Http\Controllers\DashboardController::class, 'history'])->name('view.history');
	Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});