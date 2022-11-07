<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AppliesController;
use App\Http\Controllers\PresensiController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/magang', function () {
        return view('magang');
    })->name('magang');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/daftar', function () {
        return view('daftar');
    })->name('daftar');
});
Route::POST('addss', [AppliesController::class, 'AddApplies']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/presensi', function () {
        return view('presensi');
    })->name('presensi');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/masuk', function () {
        return view('masuk');
    })->name('masuk');
    Route::POST('/simpan-masuk', [PresensiController::class,'store'])->name('simpan-masuk');
    Route::get('/masuk', [PresensiController::class,'index'])->name('masuk');
    Route::POST('ubah-presensi', [PresensiController::class,'presensipulang'])->name('ubah-presensi');
    Route::get('/keluar', [PresensiController::class,'keluar'])->name('keluar');
    Route::get('halaman-history',[PresensiController::class,'halamanhistory'])->name('halaman-history');
    Route::get('history/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('history-keseluruhan');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/keluar', function () {
        return view('keluar');
    })->name('keluar');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/history', function () {
        return view('history');
    })->name('history');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/laporan', function () {
        return view('laporan');
    })->name('laporan');
});
Route::POST('add', [ReportController::class, 'AddReport']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/tugas', function () {
        return view('tugas');
    })->name('tugas');
});
Route::POST('adds', [TaskController::class, 'AddTask']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/sertifikat', function () {
        return view('sertifikat');
    })->name('sertifikat');
});
