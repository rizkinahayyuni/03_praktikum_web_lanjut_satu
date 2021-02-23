<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/product', [CategoryController::class, 'Product'])->name('product');
    Route::get('/books', [CategoryController::class, 'Books'])->name('books');
});

//Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{param}', [NewsController::class, 'newsParam'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir'])->name('karir');
    Route::get('/magang', [ProgramController::class, 'magang'])->name('magang');
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri'])->name('kunjunganIndustri');
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactUs');