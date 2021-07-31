<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\rekam_medisController;
use App\Http\Controllers\ParuController;
use App\Http\Controllers\SuhuController;


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

Route::group(['middleware' => 'LoginMiddleware'], function () {
    Route::get('login', function () {
        return view('auth/login');
    })->name('login');
});

Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// AUTH 
Route::group(['middleware' => 'AuthMiddleware'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', function () {
        return view('welcome');
    });
        

//rawat
Route::get('/periksa/rawat', [PeriksaController::class, 'rawat']);
Route::get('periksa/editrawat/{number}', [PeriksaController::class, 'editrawat']);
Route::get('periksa/detail/{number}', [PeriksaController::class, 'detail']);
Route::post('/periksa/updaterawat', [PeriksaController::class, 'updaterawat']);

    // ADMIN ROUTER
    Route::group(['middleware' => 'AdminMiddleware'], function () {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/admin/add', [AdminController::class, 'add']);
        Route::post('/admin/store', [AdminController::class, 'store']);
        Route::get('admin/edit/{number}', [AdminController::class, 'edit']);
        Route::post('/admin/update', [AdminController::class, 'update']);
        Route::get('/admin/delete/{number}', [AdminController::class, 'destroy']);

        Route::get('/poli', [PoliController::class, 'index']);
        Route::get('/poli/add', [PoliController::class, 'add']);
        Route::post('/poli/store', [PoliController::class, 'store']);
        Route::get('poli/edit/{number}', [PoliController::class, 'edit']);
        Route::post('/poli/update', [PoliController::class, 'update']);
        Route::get('poli/delete/{number}', [PoliController::class, 'destroy']);

        Route::get('/perawat', [PerawatController::class, 'index']);
        Route::get('/perawat/add', [PerawatController::class, 'add']);
        Route::post('/perawat/store', [PerawatController::class, 'store']);
        Route::get('perawat/edit/{number}', [PerawatController::class, 'edit']);
        Route::post('/perawat/update', [PerawatController::class, 'update']);
        Route::get('/perawat/delete/{number}', [PerawatController::class, 'destroy']);

        Route::get('/ruang', [RuangController::class, 'index']);
        Route::get('/ruang/add', [RuangController::class, 'add']);
        Route::post('/ruang/store', [RuangController::class, 'store']);
        Route::get('ruang/edit/{number}', [RuangController::class, 'edit']);
        Route::post('/ruang/update', [RuangController::class, 'update']);
        Route::get('/ruang/delete/{number}', [RuangController::class, 'destroy']);

        Route::get('/obat', [ObatController::class, 'index']);
        Route::get('/obat/add', [ObatController::class, 'add']);
        Route::post('/obat/store', [ObatController::class, 'store']);
        Route::get('obat/edit/{number}', [ObatController::class, 'edit']);
        Route::post('/obat/update', [ObatController::class, 'update']);
        Route::get('/obat/delete/{number}', [ObatController::class, 'destroy']);

        Route::get('/dokter', [DokterController::class, 'index']);
        Route::get('/dokter/add', [DokterController::class, 'add']);
        Route::get('dokter/detail/{number}', [DokterController::class, 'detail']);
        Route::post('/dokter/store', [DokterController::class, 'store']);
        Route::get('dokter/edit/{number}', [DokterController::class, 'edit']);
        Route::post('/dokter/update', [DokterController::class, 'update']);
        Route::get('dokter/delete/{number}', [DokterController::class, 'destroy']);

        Route::get('/jadwal', [JadwalController::class, 'index']);
        Route::get('/jadwal/add', [JadwalController::class, 'add']);
        Route::post('/jadwal/store', [JadwalController::class, 'store']);
        Route::get('jadwal/edit/{number}', [JadwalController::class, 'edit']);
        Route::post('/jadwal/update', [JadwalController::class, 'update']);
        Route::get('jadwal/delete/{number}', [JadwalController::class, 'destroy']);

        Route::get('/pasien', [PasienController::class, 'index']);
        Route::get('/pasien/add', [PasienController::class, 'add']);
        Route::post('/pasien/store', [PasienController::class, 'store']);
        Route::get('pasien/edit/{number}', [PasienController::class, 'edit']);
        Route::post('/pasien/update', [PasienController::class, 'update']);
        Route::get('pasien/delete/{number}', [PasienController::class, 'destroy']);

        Route::get('/periksa', [PeriksaController::class, 'index']);
        Route::get('/periksa/add', [PeriksaController::class, 'add']);
        Route::post('/periksa/store', [PeriksaController::class, 'store']);
        Route::get('periksa/edit/{number}', [PeriksaController::class, 'edit']);
        Route::post('/periksa/update', [PeriksaController::class, 'update']);
        Route::get('periksa/delete/{number}', [PeriksaController::class, 'destroy']);


        
    });

    // NURSE ROUTER
    Route::group(['middleware' => 'NurseMiddleware'], function () {
        Route::get('/resep', [ResepController::class, 'index']);
        Route::get('/resep/add', [ResepController::class, 'add']);
        Route::post('/resep/store', [ResepController::class, 'store']);
        Route::get('resep/edit/{number}', [ResepController::class, 'edit']);
        Route::post('/resep/update', [ResepController::class, 'update']);
        Route::get('resep/delete/{number}', [ResepController::class, 'destroy']);

        Route::get('/rekam_medis', [rekam_medisController::class, 'index']);
        Route::get('/rekam_medis/add', [rekam_medisController::class, 'add']);
        Route::get('rekam_medis/detail/{number}', [rekam_medisController::class, 'detail']);
        Route::post('/rekam_medis/store', [rekam_medisController::class, 'store']);
        Route::get('rekam_medis/edit/{number}', [rekam_medisController::class, 'edit']);
        Route::post('/rekam_medis/update', [rekam_medisController::class, 'update']);
        Route::get('rekam_medis/delete/{number}', [rekam_medisController::class, 'destroy']);

        Route::get('/paru', [ParuController::class, 'index']);
        Route::post('/paru/store', [ParuController::class, 'store']);
        Route::get('/paru/grafik', [ParuController::class, 'grafik']);
       // Route::get('paru/{key}', [ParuController::class, 'index']);
        Route::get('paru/delete', [ParuController::class, 'destroy']); 

        Route::get('/suhu', [SuhuController::class, 'index']);
        Route::post('/suhu/store', [SuhuController::class, 'store']);
        Route::get('/suhu/grafik', [SuhuController::class, 'grafik']);
        Route::get('suhu/delete', [SuhuController::class, 'destroy']);   
        
        //antri
        Route::get('/periksa/antri', [PeriksaController::class, 'antri']);
        Route::post('/periksa/updateantri', [PeriksaController::class, 'updateantri']);
        Route::get('periksa/editantri/{number}', [PeriksaController::class, 'editantri']);
       
        //cekup
        Route::get('/periksa/cekup', [PeriksaController::class, 'cekup']);
        Route::get('periksa/editcekup/{number}', [PeriksaController::class, 'editcekup']);
        Route::post('/periksa/updatecekup', [PeriksaController::class, 'updatecekup']);

        //selesai
        Route::get('/periksa/selesai', [PeriksaController::class, 'selesai']);
        Route::get('periksa/detailselesai/{number}', [PeriksaController::class, 'detailselesai']);
    });
});


