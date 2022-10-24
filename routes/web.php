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

<<<<<<< HEAD
// login and register  routes
=======
Route::resource('/masterbarang', BarangController::class);
Route::get('/login', [loginCtrl::class, 'index']);
>>>>>>> 407dad4adeb2a0642b8d2baf1b5b12aeee66a5af
Route::get('/register', [registerCtrl::class, 'index']);
Route::get('/login', [loginCtrl::class, 'index'])->name('login');
Route::post('/login', [loginCtrl::class, 'authenticate'])->name('auth');
Route::post('/logout', [loginCtrl::class, 'logout']);    