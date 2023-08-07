<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminpegawaiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\InventarispegawaiController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RuanganpegawaiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\RekappegawaiController;
use App\Http\Controllers\HomeconfigController;
use App\Http\Controllers\SuperAdminController;

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



Route::group(['middleware' => 'auth'], function () {
    Route::get('super-admin', [AdminController::class, 'index']);

    Route::get('pegawai', [PegawaiController::class, 'index']);
    Route::post('store-pegawai', [PegawaiController::class, 'store']);
    Route::get('show-pegawai/{pegawai}', [PegawaiController::class, 'show']);
    Route::get('edit-pegawai/{pegawai}', [PegawaiController::class, 'edit']);
    Route::put('update-pegawai/{pegawai}', [PegawaiController::class, 'update']);
    Route::get('delete-pegawai/{pegawai}', [PegawaiController::class, 'destroy']);

    Route::get('inventaris', [InventarisController::class, 'index']);
    Route::post('store-inventaris', [InventarisController::class, 'store']);
    Route::get('show-inventaris/{unit}', [InventarisController::class, 'show']);
    Route::get('detail/{ruangan}', [InventarisController::class, 'detail']);
    Route::get('detail-inventaris/{inventaris}', [InventarisController::class, 'showInventaris']);
    Route::get('edit-inventaris/{inventaris}', [InventarisController::class, 'edit']);
    Route::put('update-inventaris/{id}', [InventarisController::class, 'updateinventaris']);
    Route::get('delete-inventaris/{inventaris}', [InventarisController::class, 'destroy']);

    Route::get('ruangan', [RuanganController::class, 'index']);
    Route::post('store-ruangan', [RuanganController::class, 'store']);
    Route::get('delete-ruangan/{ruangan}', [RuanganController::class, 'destroy']);
    Route::get('edit-ruangan/{ruangan}', [RuanganController::class, 'edit']);
    Route::put('update-ruangan/{ruangan}', [RuanganController::class, 'update']);
    Route::get('show-ruangan/{unit}', [RuanganController::class, 'show']);
    Route::get('detail-ruangan/{ruangan}', [RuanganController::class, 'showruangan']);

    Route::get('kondisi', [KondisiController::class, 'index']);
    Route::post('store-kondisi', [KondisiController::class, 'store']);
    Route::get('delete-kondisi/{kondisi}', [KondisiController::class, 'destroy']);

    Route::get('tim', [TimController::class, 'index']);
    Route::post('store-tim', [TimController::class, 'store']);
    Route::get('delete-tim/{tim}', [TimController::class, 'destroy']);
    Route::get('edit-tim/{tim}', [TimController::class, 'edit']);
    Route::put('update-tim/{tim}', [TimController::class, 'update']);

    Route::post('store-foto', [TimController::class, 'storefoto']);
    Route::get('delete-foto/{foto}', [TimController::class, 'destroyfoto']);
    Route::get('edit-foto/{foto}', [TimController::class, 'editfoto']);
    Route::put('update-foto/{foto}', [TimController::class, 'updatefoto']);

    Route::get('admin', [SuperAdminController::class, 'index']);
    Route::post('store-admin', [SuperAdminController::class, 'store']);
    Route::get('delete-admin/{admin}', [SuperAdminController::class, 'destroy']);
    Route::get('edit-admin/{admin}', [SuperAdminController::class, 'edit']);
    Route::put('update-admin/{admin}', [SuperAdminController::class, 'update']);
    Route::get('show-admin/{admin}', [SuperAdminController::class, 'show']);

    Route::get('unit', [UnitController::class, 'index']);
    Route::post('store-unit', [UnitController::class, 'store']);
    Route::get('delete-unit/{unit}', [UnitController::class, 'destroy']);
    Route::get('edit-unit/{unit}', [UnitController::class, 'edit']);
    Route::get('show-unit/{unit}', [UnitController::class, 'show']);
    Route::put('update-unit/{unit}', [UnitController::class, 'update']);

    Route::get('homeconfig', [HomeconfigController::class, 'index']);
    Route::post('store-profil', [HomeconfigController::class, 'store_profil']);
    Route::get('show-profil/{id}', [HomeconfigController::class, 'show_profil']);
    Route::get('edit-profil/{id}', [HomeconfigController::class, 'edit_profil']);
    Route::put('update-profil/{id}', [HomeconfigController::class, 'update_profil']);
    Route::get('delete-profil/{id}', [HomeconfigController::class, 'destroy_profil']);

    Route::post('store-deskripsi', [HomeconfigController::class, 'store']);
    Route::get('show-deskripsi/{homeconfig}', [HomeconfigController::class, 'show']);
    Route::get('edit-deskripsi/{homeconfig}', [HomeconfigController::class, 'edit']);
    Route::put('update-deskripsi/{homeconfig}', [HomeconfigController::class, 'update']);
    Route::get('delete-deskripsi/{homeconfig}', [HomeconfigController::class, 'destroy']);

    Route::get('rekap', [RekapController::class, 'index']);
    Route::get('cetak', [RekapController::class, 'cetak']);
    Route::get('show-rekap/{unit}', [RekapController::class, 'show']);
    Route::get('show-cetak/{unit}', [RekapController::class, 'cetak']);
});

Route::group(['middleware' => 'auth:pegawai'], function () {
    Route::get('admin-pegawai', [AdminpegawaiController::class, 'index']);



    Route::get('inventarispegawai', [InventarispegawaiController::class, 'indexpegawai']);
    Route::post('store-inventarispegawai', [InventarispegawaiController::class, 'storepegawai']);
    Route::get('show-inventarispegawai/{ruangan}', [InventarispegawaiController::class, 'showpegawai']);
    Route::get('edit-inventarispegawai/{inventaris}', [InventarispegawaiController::class, 'editpegawai']);
    Route::put('/update-inventarispegawai/{id}', [InventarispegawaiController::class, 'updatepegawai']);
    Route::get('delete-inventarispegawai/{inventaris}', [InventarispegawaiController::class, 'destroypegawai']);
    Route::get('detail-inventarispegawai/{inventaris}', [InventarispegawaiController::class, 'showpegawaiinventaris']);

    Route::get('ruanganpegawai', [RuanganpegawaiController::class, 'indexruangan']);
    Route::post('store-ruanganpegawai', [RuanganpegawaiController::class, 'storeruangan']);
    Route::get('show-ruanganpegawai/{unit}', [RuanganpegawaiController::class, 'showruangan']);
    Route::get('edit-ruanganpegawai/{ruangan}', [RuanganpegawaiController::class, 'editruangan']);
    Route::put('update-ruanganpegawai/{ruangan}', [RuanganpegawaiController::class, 'updateruangan']);
    Route::get('delete-ruanganpegawai/{ruangan}', [RuanganpegawaiController::class, 'destroyruangan']);
    Route::get('detail-ruanganpegawai/{ruangan}', [RuanganpegawaiController::class, 'showruanganpegawai']);

    Route::get('profil', [AdminpegawaiController::class, 'profil']);
    Route::get('edit-profilpegawai/{pegawai}', [AdminpegawaiController::class, 'editprofil']);
    Route::put('update-profilpegawai/{pegawai}', [AdminpegawaiController::class, 'updateprofil']);

    Route::get('profil-ruanganpegawai/{ruangan}', [RuanganpegawaiController::class, 'profilruangan']);
    Route::get('profil-inventarispegawai/{inventaris}', [InventarispegawaiController::class, 'profilinventaris']);

    Route::get('rekappegawai', [RekappegawaiController::class, 'index']);
    Route::get('cetakpegawai', [RekappegawaiController::class, 'cetakpegawai']);
});




Route::get('/', [HomeController::class, 'index']);

Route::get('profilpimpinan', [HomeController::class, 'profil']);
Route::get('profiltim', [HomeController::class, 'tim']);
Route::get('show/{id}', [HomeController::class, 'show']);
Route::get('showinventaris/{id}', [HomeController::class, 'showinventaris']);



Route::get('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);
