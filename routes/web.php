<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuratController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('administrator')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [AdminController::class, 'view_dashboard'])->name('dashboard');

        // Surat
        Route::get('/surat', [SuratController::class, 'view_surat']);
    });
});
