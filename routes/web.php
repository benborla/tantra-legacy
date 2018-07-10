<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
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

Route::middleware(['web'])->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get( '/', \IndexController::class)->name('index');
        Route::get( '/register', \RegisterController::class)->name('register');
        Route::post( '/login', \RegisterController::class)->name('login');
    });
});
