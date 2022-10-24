<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginCtrl;
use App\Http\Controllers\registerCtrl;
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
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});
Route::get('/masterpegawai', function () {
    return view('admin.masterpegawai');
});

Route::resource('/masterbarang', BarangController::class);
Route::get('/login', [loginCtrl::class, 'index']);
Route::get('/register', [registerCtrl::class, 'index']);
