<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteplanController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\ProgresBangunanController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register'=> false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [AdminController::class, 'admin_login']);

Route::post('/admin/login/proses', [
    AdminController::class,
    'authenticate',
]);



Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::resource('/user-admin', UserController::class);
    Route::resource('/konsumen', KonsumenController::class);
    Route::resource('/project', ProjectController::class);
    Route::get('/project/{project:id}/siteplan', [SiteplanController::class, 'index']);
    Route::get('/project/{project:id}/siteplan/create', [SiteplanController::class, 'create']);
    Route::post('/project/{project:id}/siteplan/store', [SiteplanController::class, 'store']);
    Route::get('/project/{project:id}/siteplan/{siteplan:id}/edit', [SiteplanController::class, 'edit']);
    Route::put('/project/{project:id}/siteplan/{siteplan:id}/update', [SiteplanController::class, 'update']);
    Route::delete('/project/{project:id}/siteplan/{siteplan:id}/delete', [SiteplanController::class, 'destroy']);
    Route::resource('/bangunan', BangunanController::class);
    Route::get('/pilih-siteplan/{projectId}', [BangunanController::class, 'pilih_siteplan']);
    Route::get('/bangunan/{bangunan:id}/progres-bangunan', [ProgresBangunanController::class, 'index']);
    Route::get('/bangunan/{bangunan:id}/progres-bangunan/create', [ProgresBangunanController::class, 'create']);
    Route::post('/bangunan/{bangunan:id}/progres-bangunan/store', [ProgresBangunanController::class, 'store']);
    Route::get('/bangunan/{bangunan:id}/progres-bangunan/{progres_bangunan:id}/edit', [ProgresBangunanController::class, 'edit']);
    Route::put('/bangunan/{bangunan:id}/progres-bangunan/{progres_bangunan:id}/update', [ProgresBangunanController::class, 'update']);
    Route::delete('/bangunan/{bangunan:id}/progres-bangunan/{progres_bangunan:id}/delete', [ProgresBangunanController::class, 'destroy']);
});


Route::middleware(['auth','member'])->prefix('member')->group(function () {
    Route::get('/dashboard', [MemberController::class, 'dashboard']);
    Route::get('/profil', [MemberController::class, 'profil']);
});