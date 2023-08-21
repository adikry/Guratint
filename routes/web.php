<?php

use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortoController;
use App\Filament\Resources\KontakResource;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::post('/submit', 'submit')->name('submit.form');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/links', 'links')->name('links');
    Route::get('/jump-to/{clicked:slug}', 'click')->name('link.clicked');
});

Route::get('/sitemap', function () {
    SitemapGenerator::create('http://127.0.0.1:8000/')->writeToFile('public/sitemap.xml');

    return 'sudah dibuatkan';
});

Route::controller(PortoController::class)->group(function () {
    Route::get('/portofolio', 'porto')->name('porto');
    Route::get('/portofolio/{kategori:slug}', 'portoList');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{kategori:slug}', 'blogList');
    Route::get('/blog/{kategori:slug}/{berita:slug}', 'blogDetail');
});
