<?php

use App\Http\Controllers\PersonController;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [PersonController::class, 'index'])->name('person.index');
Route::get('/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/{person}', [PersonController::class, 'show'])->name('person.show');


Route::post('/', [PersonController::class, 'store'])->name('person.store');


Route::get('/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/{person}', [PersonController::class, 'update'])->name('person.update');

Route::get('/{person}/delete', [PersonController::class, 'destroy'])->name('person.destroy');
