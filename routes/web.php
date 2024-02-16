<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

// Admin
use App\Http\Controllers\Admin\DashboardController as DashboardAdmin;
use App\Http\Controllers\Admin\NewsController as NewsAdmin;
use App\Http\Controllers\Admin\GalleryController as GalleryAdmin;
use App\Http\Controllers\Admin\SliderController as SliderAdmin;
use App\Http\Controllers\Admin\DWPMemberController;

// Member
use App\Http\Controllers\Member\DashboardController as DashboardMember;

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

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login/submit', 'login_submit')->name('login.submit');
    Route::get('/register', 'register')->name('register');
    Route::post('/register/submit', 'register_submit')->name('register.submit');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(PagesController::class)->name('pages.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/berita', 'news')->name('news');
    Route::get('/berita/{slug}', 'news_detail')->name('news-detail');
    Route::get('/contact-us', 'contact_us')->name('contact-us');
    Route::get('/sejarah', 'history')->name('history');
    Route::get('/visi-misi', 'vision_mission')->name('vision-mission');
    Route::get('/tugas-fungsi', 'task_functions')->name('task-functions');
    Route::get('/struktur-organisasi', 'organization')->name('organization');
    Route::get('/sekretariat-daerah', 'secretariat')->name('secretariat');
    Route::get('/inspektorat', 'inspectorate')->name('inspectorate');
    Route::get('/dinas-pendidikan', 'education_office')->name('education-office');
    Route::get('/pendidikan', 'education')->name('education');
    Route::get('/sosial-budaya', 'socio_cultural')->name('socio-cultural');
    Route::get('/ekonomi', 'economy')->name('economy');
    Route::get('/galeri-foto', 'gallery_photo')->name('gallery-photo');
    Route::get('/galeri-video', 'gallery_video')->name('gallery-video');
    Route::get('/informasi-eksternal', 'external_information')->name('external-information');
    Route::get('/informasi-internal', 'internal_information')->name('internal-information');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin/')->group(function () {
        Route::get('dashboard', [DashboardAdmin::class, 'dashboard'])->name('admin.dashboard');

        Route::name('news.')->group(function () {
            Route::get('news-list', [NewsAdmin::class, 'news_list'])->name('list');
            Route::get('news-add', [NewsAdmin::class, 'news_add'])->name('add');
            Route::post('news-submit', [NewsAdmin::class, 'news_submit'])->name('submit');
            Route::get('news-edit/{id}', [NewsAdmin::class, 'news_edit'])->name('edit');
            Route::post('news-update/{id}', [NewsAdmin::class, 'news_update'])->name('update');
            Route::post('news-delete/{id}', [NewsAdmin::class, 'news_delete'])->name('delete');
        });

        Route::name('gallery.')->group(function () {
            Route::get('photo-list', [GalleryAdmin::class, 'photo_list'])->name('photo.list');
            Route::get('photo-add', [GalleryAdmin::class, 'photo_add'])->name('photo.add');
            Route::post('photo-submit', [GalleryAdmin::class, 'photo_submit'])->name('photo.submit');
            Route::get('photo-edit/{id}', [GalleryAdmin::class, 'photo_edit'])->name('photo.edit');
            Route::post('photo-update/{id}', [GalleryAdmin::class, 'photo_update'])->name('photo.update');
            Route::post('photo-delete/{id}', [GalleryAdmin::class, 'photo_delete'])->name('photo.delete');

            Route::get('video-list', [GalleryAdmin::class, 'video_list'])->name('video.list');
            Route::get('video-add', [GalleryAdmin::class, 'video_add'])->name('video.add');
            Route::post('video-submit', [GalleryAdmin::class, 'video_submit'])->name('video.submit');
            Route::get('video-edit/{id}', [GalleryAdmin::class, 'video_edit'])->name('video.edit');
            Route::post('video-update/{id}', [GalleryAdmin::class, 'video_update'])->name('video.update');
            Route::post('video-delete/{id}', [GalleryAdmin::class, 'video_delete'])->name('video.delete');
        });

        Route::name('slider.')->group(function () {
            Route::get('slider-list', [SliderAdmin::class, 'slider_list'])->name('list');
            Route::get('slider-add', [SliderAdmin::class, 'slider_add'])->name('add');
            Route::post('slider-submit', [SliderAdmin::class, 'slider_submit'])->name('submit');
            Route::get('slider-edit/{id}', [SliderAdmin::class, 'slider_edit'])->name('edit');
            Route::post('slider-update/{id}', [SliderAdmin::class, 'slider_update'])->name('update');
            Route::post('slider-delete/{id}', [SliderAdmin::class, 'slider_delete'])->name('delete');
        });

        Route::name('dwp-member.')->group(function () {
            Route::get('dwp-member-list', [DWPMemberController::class, 'dwp_member_list'])->name('list');
            Route::get('dwp-member-detail/{id}', [DWPMemberController::class, 'dwp_member_detail'])->name('detail');
        });
    });
});

Route::middleware(['auth', 'member'])->group(function () {
    Route::prefix('member/')->name('member.')->group(function () {
        Route::get('dashboard', [DashboardMember::class, 'dashboard'])->name('dashboard');
        Route::get('edit-profil', [DashboardMember::class, 'profil_edit'])->name('profil-edit');
    });
});

