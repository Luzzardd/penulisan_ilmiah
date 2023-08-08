<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/landing', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/landing',[LandingController::class, 'index'])->name('landing');

Route::get('/belajar',[BelajarController::class, 'index'])->name('belajar');
Route::get('/latihan',[LatihanController::class, 'index'])->name('latihan');

Route::post('/soal/show', [SoalController::class, 'start'])->name('soal.start');
Route::get('/soal/show/{questionNumber}/{cat_id}', [SoalController::class, 'show'])->name('soal.show');
Route::post('/soal/answer/{questionNumber}/{id}', [SoalController::class, 'answer'])->name('soal.answer');
Route::get('/soal/result', [SoalController::class, 'result'])->name('soal.result');
Route::get('/',[SoalController::class,'logout'])->name('logout');

Route::get('/video/{id}', [VideoController::class, 'index'])->name('video');
