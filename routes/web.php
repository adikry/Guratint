<?php

use App\Filament\Resources\KontakResource;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortoController;
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


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit.form');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/links', [HomeController::class, 'links'])->name('links');
Route::get('/jump-to/{clicked:slug}', [HomeController::class, 'click'])->name('link.clicked');

Route::controller(PortoController::class)->group(function () {
    Route::get('/portofolio', 'porto')->name('porto');
    Route::get('/portofolio/{kategori:slug}', 'portoList');
    Route::get('/portofolio/{kategori:slug}/{porto:slug}', 'portoDetail');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{kategori:slug}', 'blogList');
    Route::get('/blog/{kategori:slug}/{berita:slug}', 'blogDetail');
});
