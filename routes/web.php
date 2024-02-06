<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HalamanAwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\YourController;
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






Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::get('/halamanawal', [HalamanAwalController::class, 'halamanawal']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout',     [LoginController::class, 'logout']);


Route::get('/daftar',   [DaftarController::class, 'daftar']);
Route::post('/simpan',   [DaftarController::class, 'simpan']);