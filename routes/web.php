<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('sitemap', function (){
    \Spatie\Sitemap\SitemapGenerator::create('https://mercielspaces.com')->writeToFile('sitemap.xml');
    return 'sitemap created';
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/send-message', [HomeController::class, 'send_message'])->name('send_message');
