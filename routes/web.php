<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

// Admin
use App\Http\Controllers\Admin\DashboardController as DashboardAdmin;
use App\Http\Controllers\Admin\NewsController as NewsAdmin;
use App\Http\Controllers\Admin\GalleryController as GalleryAdmin;
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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/news', 'news')->name('news');
    Route::get('/news/detail', 'news_detail')->name('news_detail');
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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin/')->group(function () {
        Route::get('dashboard', [DashboardAdmin::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix('news/')->name('news.')->group(function () {
            Route::get('list', [NewsAdmin::class, 'news_list'])->name('list');
            Route::get('add', [NewsAdmin::class, 'news_add'])->name('add');
            Route::post('submit', [NewsAdmin::class, 'news_submit'])->name('submit');
            Route::get('edit/{id}', [NewsAdmin::class, 'news_edit'])->name('edit');
            Route::post('update/{id}', [NewsAdmin::class, 'news_update'])->name('update');
            Route::post('delete/{id}', [NewsAdmin::class, 'news_delete'])->name('delete');
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

Route::middleware(['auth', 'member'])->group(function () {
    Route::prefix('member/')->group(function () {
        Route::get('dashboard', [DashboardMember::class, 'dashboard'])->name('member.dashboard');
    });
});

