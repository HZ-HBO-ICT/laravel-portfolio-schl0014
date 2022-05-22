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

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/blog', function () {
    return view('blog');
})->middleware(['auth'])->name('blog');

Route::get('/racing', function () {
    return view('racing');
})->middleware(['auth'])->name('racing');

Route::get('/football', function () {
    return view('football');
})->middleware(['auth'])->name('football');

Route::get('/faq', function () {
    return view('faq');
})->middleware(['auth'])->name('faq');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/grade', function () {
        return view('grades\index ');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/racing', [RacingController::class, 'show']);
Route::get('/football', [FootballController::class, 'show']);
Route::resource('/faq', FaqController::class);
Route::resource('/blog', BlogController::class);
Route::resource('/grade', GradeController::class);
require __DIR__.'/auth.php';
