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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resources(
        [
            'programs' => ProgramController::class,
            'pertanyaan' => AskController::class,
        ]
    );
});

Auth::routes();
