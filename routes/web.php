<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\itemCtrl;
use App\Http\Controllers\categoryCtrl;
use App\Http\Controllers\transactionCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginCtrl;
use App\Http\Controllers\pegawaiCtrl;
use App\Http\Controllers\registerCtrl;
// use App\Http\Controllers\regControl;

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
    return view('admin.view_hadeer.dashboard');
});

Route::get('/main', function () {
    return view('main');
});
Route::get('/masterpegawai', function () {
    return view('admin.masterpegawai');
});
Route::get('/dashboard', function () {
    return view('admin.view_hadeer.dashboard');
});

// <<<<<<< HEAD
// login and register  routes
// =======

Route::middleware('auth')->group(function (){
    Route::resource('/masterbarang', BarangController::class);
    Route::resource('/masterpegawai', pegawaiCtrl::class);
    Route::resource('/mastertransaction', transactionCtrl::class);
    Route::resource('/masteritem', itemCtrl::class);
    Route::get('/history', [transactionCtrl::class, 'history']);
    Route::post('/mastertransaction/checkout',[transactionCtrl::class, 'checkout'])->name('transaction.checkout');
    Route::resource('/register',registerCtrl::class);
    Route::resource('/mastercategory',categoryCtrl::class);    
    Route::post('/logout', [loginCtrl::class, 'logout']);    
});


// Route::get('',registerCtrl::class, 'index')->name('baru');
// Route::get('/reg', [regControl::class, 'index']);

Route::middleware('guest')->group(function(){
    
    // Route::get('/login', [loginCtrl::class, 'index']);
    Route::get('/login', [loginCtrl::class, 'index'])->name('login');
    Route::post('/login', [loginCtrl::class, 'authenticate'])->name('auth');


});

