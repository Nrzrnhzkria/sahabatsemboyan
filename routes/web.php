<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;

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

// Landing Page
Route::get('/', [HomeController::class, 'home']);
Route::get('/keahlian', [HomeController::class, 'keahlian']);
Route::get('/hubungi', [HomeController::class, 'hubungi']);

// Shop Page
Route::get('/shop', [ShopController::class, 'shop']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
