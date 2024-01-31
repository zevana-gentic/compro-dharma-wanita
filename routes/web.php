<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
// Route::get('/', function () {
//     return view('layouts.landing');
// });

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/news', [LandingController::class, 'news'])->name('news');
Route::get('/contact-us', [LandingController::class, 'contact_us'])->name('contact-us');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
