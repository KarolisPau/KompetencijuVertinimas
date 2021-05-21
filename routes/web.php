<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlausimasController;
use App\Http\Controllers\SkelbimasController;

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
})->name('titulinis');

Route::get('/kontaktai', function () {
    return view('kontaktai');
})->name('kont');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/kontaktai/klausti', [KlausimasController::class, 'store'])
   ->middleware(['auth'])->name('klausti');

   Route::post('/skelbimai/sukurti', [SkelbimasController::class, 'store'])
   ->middleware(['auth'])->name('skelbti');

   Route::get('/skelbimai', [SkelbimasController::class, 'index'])
   ->name('skelb');

   Route::get('/skelbimai/istrinti', [SkelbimasController::class, 'destroy'])
   ->name('istrinti');




require __DIR__.'/auth.php';
