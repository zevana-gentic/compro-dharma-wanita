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
// Route::get('/', function () {
//     return view('layouts.landing');
// });

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/news', [LandingController::class, 'news'])->name('news');
Route::get('/contact-us', [LandingController::class, 'contact_us'])->name('contact-us');
Route::get('/sejarah', [LandingController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [LandingController::class, 'visi_misi'])->name('visi_misi');
Route::get('/tugas-fungsi', [LandingController::class, 'tugas_fungsi'])->name('tugas_fungsi');
Route::get('/struktur-organisasi', [LandingController::class, 'struktur_organisasi'])->name('struktur_organisasi');
Route::get('/sekretariat-daerah', [LandingController::class, 'sekretariat'])->name('sekretariat');
Route::get('/inspektorat', [LandingController::class, 'inspektorat'])->name('inspektorat');
Route::get('/dinas-pendidikan', [LandingController::class, 'dinas_pendidikan'])->name('dinas_pendidikan');
Route::get('/pendidikan', [LandingController::class, 'pendidikan'])->name('pendidikan');
Route::get('/sosial-budaya', [LandingController::class, 'sosial_budaya'])->name('sosial_budaya');
Route::get('/ekonomi', [LandingController::class, 'ekonomi'])->name('ekonomi');
Route::get('/galeri-foto', [LandingController::class, 'galeri_foto'])->name('galeri_foto');
Route::get('/galeri-video', [LandingController::class, 'galeri_video'])->name('galeri_video');
Route::get('/informasi-eksternal', [LandingController::class, 'informasi_eksternal'])->name('informasi_eksternal');
Route::get('/informasi-internal', [LandingController::class, 'informasi_internal'])->name('informasi_internal');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
