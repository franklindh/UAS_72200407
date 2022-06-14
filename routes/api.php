<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use Illuminate\Http\Support\Str;

Route::get('/kelas', [KelasController::class, 'getDataKelas']);
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/kelas', [KelasController::class, 'getDataKelas']);
Route::get('/kelastoken', [KelasController::class, 'getDataKelasToken'])->middleware('auth:api');
Route::get('/kelas/{idkelas}', [KelasController::class, 'getDataKelasById']);

Route::get('/mapel', [KelasController::class, 'getDataMapel']);
Route::get('/mapeltoken', [KelasController::class, 'getDataMapelToken'])->middleware('auth:api');
Route::post('/mapel', [KelasController::class, 'insertDataMapel']);
Route::put('/mapel', [KelasController::class, 'updateDataMapel']);
Route::delete('/mapel', [KelasController::class, 'deleteDataMapel']);
Route::delete('/mapel/{id_mapel}', [KelasController::class, 'deleteDataMapelbyId']);


Route::get('/guru', [KelasController::class, 'getDataGuru']);
Route::get('/gurutoken', [KelasController::class, 'getDataGuruToken'])->middleware('auth:api');
Route::post('/guru', [KelasController::class, 'insertDataGuru']);
Route::put('/guru', [KelasController::class, 'updateDataGuru']);
Route::delete('/guru', [KelasController::class, 'deleteDataGuru']);
Route::delete('/guru/{id_guru}', [KelasController::class, 'deleteDataGurubyId']);

Route::get('/jadwalguru', [KelasController::class, 'getDataJadwalGuru']);
Route::get('/jadwalgurutoken', [KelasController::class, 'getDatJadwalGuruToken'])->middleware('auth:api');
Route::post('/jadwalguru', [KelasController::class, 'insertDataJadwalGuru']);
Route::put('/jadwalguru', [KelasController::class, 'updateDataJadwalGuru']);
Route::delete('/jadwalguru/{jadwal_id}', [KelasController::class, 'deleteDataJadwalGurubyId']);

Route::get('/presensiharian', [KelasController::class, 'getDataPresensiHarian']);
Route::get('/presensihariantoken', [KelasController::class, 'getDataPresensiHarianToken'])->middleware('auth:api');
Route::post('/presensiharian', [KelasController::class, 'insertDataPresensiHarian']);
Route::put('/presensiharian', [KelasController::class, 'updateDataPresensiHarian']);
Route::delete('/presensiharian/{id_presensi_harian}', [KelasController::class, 'deleteDataPresensiHarianbyId']);

Route::get('/presensimengajar', [KelasController::class, 'getDataPresensiMengajar']);
Route::get('/prensensimengajartoken', [KelasController::class, 'getDataPresensiMengajarToken'])->middleware('auth:api');
Route::post('/presensimengajar', [KelasController::class, 'insertDataPresensiMengajar']);
Route::put('/presensimengajar', [KelasController::class, 'updateDataPresensiMengajar']);
Route::delete('/presensimengajar/{id_presensi_mengajar}', [KelasController::class, 'deleteDataPresensiMengajarbyId']);