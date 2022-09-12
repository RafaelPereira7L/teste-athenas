<?php

use App\Http\Controllers\PersonController;
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

Route::get('/', [PersonController::class, 'index'])->name('person.index');
Route::get('/{person}', [PersonController::class, 'show'])->name('person.show');

Route::post('/{person}', [PersonController::class, 'store'])->name('person.store');
