<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\nqtSessionController;
use App\Http\Controllers\nqtAccountController;


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


Route::get('/nqtam-register', function (){
    return view('register');
});
Route::post('/nqtam-register', [RegisterController::class, 'RegisterSubmit'])->name('register.submit');

Route::get('/nqtam-login',[nqtAccountController::class,'nqtlogin'])->name('nqtaccount.nqtlogin');
Route::post('/nqtam-login',[nqtAccountController::class,'nqtloginsubmit'])->name('nqtaccount.nqtloginsubmit');

// Route::get('/nqtam-login',[LoginController::class,'index2'])->name('login.index');
// Route::post('/nqtam-login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/session/get', [nqtSessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set', [nqtSessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete', [nqtSessionController::class,'deleteSessionData'])->name('session.delete');