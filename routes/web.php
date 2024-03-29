<?php

use App\Http\Controllers\GamingDevicesController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('home');
});

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::group(['middleware'=>['auth']], function () {
    Route::get('/playstation', [GamingDevicesController::class, 'playstation'])->name('playstation');
    Route::get('/game_pc', [GamingDevicesController::class, 'gamePC'])->name('game_pc');
    Route::get('/pc', [GamingDevicesController::class, 'pc'])->name('pc');
});

