<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DudiController;
use App\Http\Controllers\PembimbingController;
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

Route::get('/dudi', [DudiController::class, 'dashboard'])->name('dudi.dashboard')->middleware(('auth:dudi'));


// Pembimbing

Route::group(['prefix' => 'pembimbing',  'middleware' => 'auth:pembimbing', 'controller' => PembimbingController::class], function()
{
    Route::get('', 'dashboard')->name('pembimbing.dashboard');
    Route::get('/addsiswa', 'addSiswa')->name('pembimbing.addsiswa');
    Route::post('/addsiswa', 'storeSiswa')->name('pembimbing.storesiswa');
    Route::get('/adddudi', 'addDudi')->name('pembimbing.adddudi');
    Route::post('/adddudi', 'storeDudi')->name('pembimbing.storedudi');

    Route::get('/edit', 'editPembimbing')->name('pembimbing.editpembimbing');
    Route::post('/edit', 'updatePembimbing')->name('pembimbing.updatepembimbing');
});
