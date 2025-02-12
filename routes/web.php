<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/feature', [App\Http\Controllers\FeatureController::class, 'feature'])->name('feature');

Route::get('/projet', [App\Http\Controllers\ProjetController::class, 'projet'])->name('projet');

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'service'])->name('service');
