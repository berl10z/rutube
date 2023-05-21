<?php

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
})->name('welcome');


Route::get('/register', [App\Http\Controllers\AuthController::class, 'registerShow'])->name('registerShow');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'loginShow'])->name('loginShow');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upload', [App\Http\Controllers\VideoController::class, 'uploadShow'])->name('uploadShow');
