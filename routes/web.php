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

//Admin



Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/colocation-server', function () {
    return view('admin/colocation-server');
});

Route::get('/admin/akses-fisik', function () {
    return view('admin/akses-fisik');
});

Route::get('/admin/single-user', function () {
    return view('admin/single-user');
});

Route::get('/admin/multi-user', function () {
    return view('admin/multi-user');
});

Route::get('/admin/permohonan-vps', function () {
    return view('admin/permohonan-vps');
});

Route::get('/admin/perubahan-vps', function () {
    return view('admin/perubahan-vps');
});

Route::get('/admin/pengajuan-server', function () {
    return view('admin/pengajuan-server');
});











// User

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/server/colocation-server', function () {
    return view('Colocation-Server');
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
