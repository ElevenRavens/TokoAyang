<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return "Hallo nama saya Moch Rizal Hermawan";
});

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/beranda', [LatihanController::class, 'beranda']);

Route::get('/', [HomepageController::class, 'index']);

Route::get('/about', [HomepageController::class, 'about']);

Route::get('/kontak', [HomepageController::class, 'kontak']);

Route::get('/kategori', [HomepageController::class, 'kategori']);

// Route kategori grup
// Route::group(['prefix' => 'admin'], function(){
//     Route::get('/', 'DashboardController@index');
//     // route kategori
//     Route::resource('kategori', KategoriController::class);

// });

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
        Route::resource('kategori', KategoriController::class);

});

Route::prefix('/mahasiswa')->group( function(){
    Route::get('/pendaftaran', function(){
        $mm =  "hALAMAN PENDAFTARAN";
        $KJ =  "Ini Halaman Pendaftaran";
        return view('mahasiswa.index', compact ('mm', 'KJ'));
    });

    Route::get('/ujian', function(){
        
        $mm =  "HALAMAN UJIAN";
        $KJ =  "Ini Halaman Ujian";
        return view('mahasiswa.index', compact ('mm', 'KJ'));
        
    });

    Route::get('/nilai', function(){
        $mm =  "HALAMAN NILAI";
        $KJ =  "Ini Halaman Nilai";
        return view('mahasiswa.index', compact ('mm', 'KJ'));
    });
});


