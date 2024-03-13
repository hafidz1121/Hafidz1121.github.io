<?php

use App\Http\Controllers\OverviewController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/parsing_data', [ContentController::class, 'index']);
Route::get('/request_data/{nama}', [ContentController::class, 'requestData']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'registerProcess'])->name('register.process');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'loginProcess'])->name('login.process');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('home', [LoginController::class, 'index'])->name('home');
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::get('overview', [OverviewController::class, 'index'])->name('overview');
});

