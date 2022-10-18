<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\TempatWisataController;
use App\Http\Controllers\Pages\TentangController;
use App\Http\Controllers\Pages\KontakController;

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
    return view('pages.index')->with([
        'active' => 'beranda',
    ]);
});

Route::get('blog', [BlogController::class, 'index']);
Route::get('tempat-wisata', [TempatWisataController::class, 'index']);
Route::get('tentang', [TentangController::class, 'index']);
Route::get('kontak', [KontakController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
