<?php

use App\Http\Controllers\PersonControllerApi;
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

Route::get('/', [PersonControllerApi::class, 'index'])->name('person.index');
Route::get('/{person}', [PersonControllerApi::class, 'show'])->name('person.show');


Route::post('/', [PersonControllerApi::class, 'store'])->name('person.store');


Route::put('/{person}', [PersonControllerApi::class, 'update'])->name('person.update');


Route::delete('/{person}/delete', [PersonControllerApi::class, 'destroy'])->name('person.destroy');
