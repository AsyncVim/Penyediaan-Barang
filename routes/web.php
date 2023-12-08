<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailPenerimaanController;
use App\Http\Controllers\DetailPermintaanBeliController;
use App\Http\Controllers\KeluarBarangController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PermintaanBeliController;
use App\Http\Controllers\TMPCetakController;
use App\Http\Controllers\UserController;
use App\Models\KeluarBarang;
use App\Models\Penerimaan;
use App\Models\Pengeluaran;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index', [
            'title' => 'Home'
        ]);
    });
    Route::get('barang', [DetailController::class, 'index']);
    Route::get('permintaan', [PermintaanBeliController::class, 'index']);
    Route::get('permintaan/{kode}', [PermintaanBeliController::class, 'detail']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('register', [UserController::class, 'create']);
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::post('register', [UserController::class, 'store']);
});

Route::middleware(['pelanggan', 'auth'])->group(function () {
    Route::post('out', [KeluarBarangController::class, 'index']);
    Route::post('req', [DetailPermintaanBeliController::class, 'index']);

    Route::get('barang/{kode}', [DetailController::class, 'keluar']);
    Route::get('pengeluaran', [PengeluaranController::class, 'index']);
    Route::get('pengeluaran/{kode}', [PengeluaranController::class, 'detail']);
});



Route::middleware(['supplier', 'auth'])->group(function () {
    Route::post('in', [DetailPenerimaanController::class, 'index']);
    Route::post('cetak', [TMPCetakController::class, 'cetak']);

    Route::get('cetak', [TMPCetakController::class, 'index']);
    Route::get('penerimaan', [PenerimaanController::class, 'index']);
    Route::get('penerimaan/create', [PenerimaanController::class, 'create']);
    Route::get('penerimaan/{kode}', [PenerimaanController::class, 'detail']);
});
