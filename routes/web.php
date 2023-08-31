<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/colocation-server', function () {
    return view('admin/colocation');
});
Route::get('/yola', function () {
    return view('formulirpermohonanvpsbaru');
});

Route::get('/server/colocation-server', function () {
    return view('Colocation-Server');
});

Route::get('/server/pengajuan-vps', function () {
    return view('Pengajuan-VPS');
});

Route::get('/server/akses-fisik', function () {
    return view('Akses-Fisik');
});

Route::get('/sertifikat-elektronik/single-user', function () {
    return view('Single-User');
});

Route::get('/sertifikat-elektronik/multi-user', function () {
    return view('Multi-User');
});

Route::get('/vps/permohonan-vps', function () {
    return view('Permohonan-VPS');
});

Route::get('/vps/perubahan-vps', function () {
    return view('Perubahan-VPS');
});

Route::get('/vps/pengajuan-server', function () {
    return view('Pengajuan-Server');
});

Route::get('/testing', [App\Http\Controllers\TestingController::class, 'index'])->name('testing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
