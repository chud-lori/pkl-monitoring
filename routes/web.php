<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DudiController;
use App\Http\Controllers\SiswaController;
use App\Models\Pembimbing;

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


Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/siswa', [SiswaController::class, 'dashboard'])->name('siswa.dashboard')->middleware(('auth:siswa'));
Route::get('/pembimbing', [Pembimbing::class, 'dashboard'])->name('pembimbing.dashboard')->middleware(('auth:pembimbing'));
Route::get('/dudi', [DudiController::class, 'dashboard'])->name('dudi.dashboard')->middleware(('auth:dudi'));
