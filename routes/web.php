<?php

use App\Http\Controllers\Admin\AskController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TentangKamiController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/kelas', KelasController::class)->name('kelas');
Route::get('/tentang-kami', TentangKamiController::class)->name('tentang-kami');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resources(
        [
            'programs' => ProgramController::class,
            'pertanyaan' => AskController::class,
        ]
    );
});

Auth::routes();
