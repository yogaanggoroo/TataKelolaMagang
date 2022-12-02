<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AppliesController;
use App\Http\Controllers\PresensiController;
use App\Http\Livewire\Participants;
use App\Http\Livewire\Presences;
use App\Http\Livewire\Reports;
use App\Http\Livewire\Assignments;
use App\Http\Livewire\Evaluations;
use App\Http\Livewire\Certificates;

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
    Route::get('/admin/dashboard', function () {
        return view('admin-dashboard');
    })->name('admin-dashboard');

    Route::get('/admin/participant',Participants::class,)->name('admin-participant');

    Route::get('/admin/presence', Presences::class,)->name('admin-presence');

    Route::get('/admin/report', Reports::class,)->name('admin-report');

    Route::get('/admin/project', Assignments::class,)->name('admin-project');

    Route::get('/admin/evaluation', Evaluations::class,)->name('admin-evaluation');

    Route::get('/admin/certificate', Certificates::class,)->name('admin-certificate');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/magang', function () {
        return view('magang');
    })->name('magang');
    Route::get('/daftar', function () {
        return view('daftar');
    })->name('daftar');
    Route::POST('addss', [AppliesController::class, 'AddApplies']);
    Route::get('/presensi', function () {
        return view('presensi');
    })->name('presensi');
    Route::get('/masuk', function () {
        return view('masuk');
    })->name('masuk');
    Route::POST('/simpan-masuk', [PresensiController::class,'store'])->name('simpan-masuk');
    Route::get('/masuk', [PresensiController::class,'index'])->name('masuk');
    Route::POST('ubah-presensi', [PresensiController::class,'presensipulang'])->name('ubah-presensi');
    Route::get('/keluar', [PresensiController::class,'keluar'])->name('keluar');
    Route::get('halaman-history',[PresensiController::class,'halamanhistory'])->name('halaman-history');
    Route::get('history/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('history-keseluruhan');
    Route::get('/keluar', function () {
        return view('keluar');
    })->name('keluar');
    Route::get('/history', function () {
        return view('history');
    })->name('history');
    Route::get('/laporan', function () {
        return view('laporan');
    })->name('laporan');
    Route::POST('add', [ReportController::class, 'AddReport']);
    Route::get('/tugas', function () {
        return view('tugas');
    })->name('tugas');
    Route::POST('adds', [TaskController::class, 'AddTask']);
    Route::get('/sertifikat', function () {
        return view('sertifikat');
    })->name('sertifikat');
});
