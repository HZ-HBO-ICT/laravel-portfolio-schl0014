<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RacingController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'show'])
    ->middleware(['auth'])->name('welcome');

Route::get('/profile', [ProfileController::class, 'show'])
    ->middleware(['auth'])->name('profile');

Route::resource('/blog', BlogController::class)
    ->middleware(['auth']);

Route::get('/racing', [RacingController::class, 'show'])
    ->middleware(['auth'])->name('racing');

Route::get('/football', [FootballController::class, 'show'])
    ->middleware(['auth'])->name('football');

Route::resource('/faq', FaqController::class)
    ->middleware(['auth']);

Route::resource('/grade', GradeController::class
)->middleware(['auth']);

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('authenticatedSession.destroy');
    Route::get('redirects', [WelcomeController::class, 'show']);
});

require __DIR__ . '/auth.php';
