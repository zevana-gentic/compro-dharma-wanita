<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

// Admin
use App\Http\Controllers\Admin\DashboardController as DashboardAdmin;
use App\Http\Controllers\Admin\NewsController as NewsAdmin;
use App\Http\Controllers\Admin\GalleryController as GalleryAdmin;
use App\Http\Controllers\Admin\DWPMemberController;

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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/news', 'news')->name('news');
    Route::get('/contact-us', 'contact_us')->name('contact-us');
    Route::get('/sejarah', 'history')->name('history');
    Route::get('/visi-misi', 'vision_mission')->name('vision_mission');
    Route::get('/tugas-fungsi', 'task_functions')->name('task_functions');
    Route::get('/struktur-organisasi', 'organization')->name('organization');
    Route::get('/sekretariat-daerah', 'secretariat')->name('secretariat');
    Route::get('/inspektorat', 'inspectorate')->name('inspectorate');
    Route::get('/dinas-pendidikan', 'education_office')->name('education_office');
    Route::get('/pendidikan', 'education')->name('education');
    Route::get('/sosial-budaya', 'socio_cultural')->name('socio_cultural');
    Route::get('/ekonomi', 'economy')->name('economy');
    Route::get('/galeri-foto', 'gallery_photo')->name('gallery_photo');
    Route::get('/galeri-video', 'gallery_video')->name('gallery_video');
    Route::get('/informasi-eksternal', 'external_information')->name('external_information');
    Route::get('/informasi-internal', 'internal_information')->name('internal_information');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin/')->group(function () {
        Route::get('dashboard', [DashboardAdmin::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix('news/')->name('news.')->group(function () {
            Route::get('list', [NewsAdmin::class, 'news_list'])->name('list');
        });

        Route::prefix('gallery/')->name('gallery.')->group(function () {
            Route::get('photo/list', [GalleryAdmin::class, 'photo_list'])->name('photo.list');

            Route::get('video/list', [GalleryAdmin::class, 'video_list'])->name('video.list');
        });

        Route::prefix('dwp-member/')->name('dwp-member.')->group(function () {
            Route::get('list', [DWPMemberController::class, 'dwp_member_list'])->name('list');
        });
    });

});

