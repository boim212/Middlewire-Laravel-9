<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RelawanController;

//---------Route Default
Route::get('/', function () {
    return view('welcome');
});


//---------Route Relawan
Route::get('/login/relawan',[RelawanController::class,'formLogin'])->name('login');
Route::group(['middleware'=>['auth','hak_akses:relawan']], function(){
    
    Route::controller(HomeController::class)->group(function (){
        // Route::get('/my','index')->name('dashboard');
    });

});

//---------Route Admin
Route::get('/login/admin',[AdminController::class,'formLogin'])->name('login.admin');
Route::group(['middleware' => ['auth','hak_akses:admin,relawan']],function(){
    // route yang bisa di akses admin / relawan
    Route::get('/daftar',[AdminController::class,'hanyaAdmin']);
});