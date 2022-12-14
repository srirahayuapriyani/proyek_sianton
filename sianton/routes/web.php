<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Public\AppController;
use App\Http\Controllers\JadwalPraktikController;
use App\Http\Controllers\Account\Dokter\DokterController;
use App\Http\Controllers\Account\Admin\AdministratorController;




Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login'); //msh blm login
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::group(["middleware" => ["autentikasi"]], function() {
    Route::group(["middleware" => ["can:admin"]], function() {
        Route::prefix("admin")->group(function () {
            Route::get("/dashboard", [AppController::class, "dashboard_admin"]);
            Route::get('/jadwalpraktik', [JadwalPraktikController::class, 'index']);
            // INDEX, CREATE, STORE, EDIT, UPDATE, DESTROY, SHOW
            
            Route::resource('/dokter', DokterController::class);
            Route::resource('/admin', AdministratorController::class);

            Route::get('/jadwalpraktik/edit/{id}', [JadwalPraktikController::class, 'edit']);
            Route::post('/jadwalpraktik/update/{id}', [JadwalPraktikController::class, 'update']);
            
            Route::get('/setting', [SettingController::class, 'index']);
            Route::get('/profil', [ProfilController::class, 'index']);
        });
    });

    Route::group(["middleware" => ["can:dokter"]], function() {
        Route::prefix("dokter")->group(function () {
            Route::get("/dashboard", [AppController::class, "dashboard_dokter"]);
            Route::get('/jadwalpraktik', [JadwalPraktikController::class, 'index']);
            
            Route::get('/jadwalpraktik/edit/{id}', [JadwalPraktikController::class, 'edit']);
            Route::post('/jadwalpraktik/update/{id}', [JadwalPraktikController::class, 'update']);
            
            Route::resource('/antrian', AntrianController::class);

        });

    });

    Route::get("/logout", [LoginController::class, 'logout']);
});



Route::get('/adminn', function () {
    return view('/admin.home');
})->middleware('auth');

Route::get('/dokter', function () {
    return view('/dokter.home');
})->middleware('auth');

// Route::get('/dashboardd', function () {
//     $judul = 'ADMIN SIANTON';
//     $title = 'Dashboard';
//     $slug = 'dashboardd';
//     return view('/admin.home', compact('title', 'judul', 'slug'));
// })->middleware('auth');