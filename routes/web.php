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
Route::get('/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/{person}', [PersonController::class, 'show'])->name('person.show');


Route::post('/', [PersonController::class, 'store'])->name('person.store');


Route::get('/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/{person}', [PersonController::class, 'update'])->name('person.update');

Route::get('/{person}/delete', [PersonController::class, 'destroy'])->name('person.destroy');
