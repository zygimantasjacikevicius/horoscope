<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RatingController;

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

Route::get('/', [RatingController::class, 'index'])->name('zodiac_index');

Auth::routes();

Route::get('/home', [RatingController::class, 'index'])->name('zodiac_index');

Route::get('/zodiacs', [RatingController::class, 'index'])->name('zodiac_index');
Route::get('/zodiacs/show/{zodiac}', [RatingController::class, 'show'])->name('zodiac_show');
