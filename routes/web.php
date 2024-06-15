<?php

use App\Http\Controllers\Car\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::patch('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.delete');
