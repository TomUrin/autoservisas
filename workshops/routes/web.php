<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopsController as W;
use App\Http\Controllers\MechanicController as M;
use App\Http\Controllers\ServiceController as S;
use App\Http\Controllers\ClientController as C;
use App\Http\Controllers\FrontController as F;
use App\Http\Controllers\SelectedServicesController as SS;

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
});

//Front
Route::get('', [F::class, 'index'])->name('front-index');

// Workshops

Route::prefix('workshops')->name('workshops-')->group(function () {
    Route::get('', [W::class, 'index'])->name('index');
    Route::get('create', [W::class, 'create'])->name('create');
    Route::post('', [W::class, 'store'])->name('store');
    Route::get('edit/{workshops}', [W::class, 'edit'])->name('edit');
    Route::put('{workshops}', [W::class, 'update'])->name('update');
    Route::delete('{workshops}', [W::class, 'destroy'])->name('delete');
    Route::get('show/{id}', [W::class, 'show'])->name('show');    
});

// Mechanics

Route::prefix('mechanics')->name('mechanics-')->group(function () {
    Route::get('', [M::class, 'index'])->name('index');
    Route::get('create', [M::class, 'create'])->name('create');
    Route::post('', [M::class, 'store'])->name('store');
    Route::get('edit/{mechanics}', [M::class, 'edit'])->name('edit');
    Route::put('{mechanics}', [M::class, 'update'])->name('update');
    Route::delete('{mechanics}', [M::class, 'destroy'])->name('delete');
    Route::get('show/{id}', [M::class, 'show'])->name('show');
    Route::put('delete-picture/{mechanics}', [M::class, 'deletePicture'])->name('delete-picture');    
});

// Services

Route::prefix('services')->name('services-')->group(function () {
    Route::get('', [S::class, 'index'])->name('index');
    Route::get('create', [S::class, 'create'])->name('create');
    Route::post('', [S::class, 'store'])->name('store');
    Route::get('edit/{services}', [S::class, 'edit'])->name('edit');
    Route::put('{services}', [S::class, 'update'])->name('update');
    Route::delete('{services}', [S::class, 'destroy'])->name('delete');
    Route::get('show/{id}', [S::class, 'show'])->name('show');    
});

// Clients

Route::prefix('clients')->name('clients-')->group(function () {
    Route::get('', [C::class, 'index'])->name('index');
    Route::get('create', [C::class, 'create'])->name('create');
    Route::post('', [C::class, 'store'])->name('store');
    Route::get('edit/{clients}', [C::class, 'edit'])->name('edit');
    Route::put('{clients}', [C::class, 'update'])->name('update');
    Route::delete('{clients}', [C::class, 'destroy'])->name('delete');
    Route::get('show/{id}', [C::class, 'show'])->name('show');    
});

// Selected Services

Route::prefix('selectedServices')->name('selectedServices-')->group(function () {
    Route::get('', [SS::class, 'index'])->name('index');
    Route::get('create', [SS::class, 'create'])->name('create');
    Route::post('', [SS::class, 'store'])->name('store');
    Route::get('edit/{selectedServices}', [SS::class, 'edit'])->name('edit');
    Route::put('{selectedServices}', [SS::class, 'update'])->name('update');
    Route::delete('{selectedServices}', [SS::class, 'destroy'])->name('delete');
    Route::get('show/{id}', [SS::class, 'show'])->name('show');    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
