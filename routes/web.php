<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/news', [LandingController::class, 'news'])->name('news');
Route::get('/contact-us', [LandingController::class, 'contact_us'])->name('contact-us');
Route::get('/sejarah', [LandingController::class, 'history'])->name('history');
Route::get('/visi-misi', [LandingController::class, 'vision_mission'])->name('vision_mission');
Route::get('/tugas-fungsi', [LandingController::class, 'task_functions'])->name('task_functions');
Route::get('/struktur-organisasi', [LandingController::class, 'organization'])->name('organization');
Route::get('/sekretariat-daerah', [LandingController::class, 'secretariat'])->name('secretariat');
Route::get('/inspektorat', [LandingController::class, 'inspectorate'])->name('inspectorate');
Route::get('/dinas-pendidikan', [LandingController::class, 'education_office'])->name('education_office');
Route::get('/pendidikan', [LandingController::class, 'education'])->name('education');
Route::get('/sosial-budaya', [LandingController::class, 'socio_cultural'])->name('socio_cultural');
Route::get('/ekonomi', [LandingController::class, 'economy'])->name('economy');
Route::get('/galeri-foto', [LandingController::class, 'gallery_photo'])->name('gallery_photo');
Route::get('/galeri-video', [LandingController::class, 'gallery_video'])->name('gallery_video');
Route::get('/informasi-eksternal', [LandingController::class, 'external_information'])->name('external_information');
Route::get('/informasi-internal', [LandingController::class, 'internal_information'])->name('internal_information');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
