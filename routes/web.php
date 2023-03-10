<?php

use App\Http\Controllers\WebsiteController;
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


Route::get('', [WebsiteController::class, 'index'])->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('post', [WebsiteController::class, 'post'])->name('post');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');