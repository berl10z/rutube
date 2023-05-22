<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MainController;

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
Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/home',[MainController::class,'home'])->name('home');

Route::get('/register',[AuthController::class, 'registerShow'])->name('registerShow');
Route::post('/register',[AuthController::class, 'register'])->name('register');

Route::get('/login',[AuthController::class, 'loginShow'])->name('loginShow');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/upload',[VideoController::class, 'uploadShow'])->name('uploadShow');
Route::post('/upload',[VideoController::class, 'upload'])->name('upload');
Route::get('/{id}/delete/',[VideoController::class, 'delete'])->name('delete');
