<?php

use App\DataTables\kategoriDataTable;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KategoriController;
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
    return view('welcome');

});
Route::get('/welcome',[Controller::class,'welcome']);
Route::get('/kategori',[KategoriController::class,'index'])->name('kategori.index');;
Route::get('/create',[KategoriController::class,'create'])->name('create');
Route::post('/store',[KategoriController::class,'store'])->name('store');
Route::get('/manage',[KategoriController::class,'manage'])->name('manage');
Route::get('/{id}/ubah/',[KategoriController::class,'ubah'])->name('ubah');
Route::put('/{id}/simpan_ubah',[KategoriController::class,'simpan_ubah'])->name('simpan_ubah');
Route::get('/delete/{id}/',[KategoriController::class,'delete'])->name('delete');