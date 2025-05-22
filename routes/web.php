<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarBrandController;

Route::middleware(['auth'])->group(function () {
    Route::get('/car-brands', [CarBrandController::class, 'index'])->name('car-brands.index');
    Route::get('/car-brands/create', [CarBrandController::class, 'create'])->name('car-brands.create');
    Route::post('/car-brands', [CarBrandController::class, 'store'])->name('car-brands.store');
    Route::get('/car-brands/{carBrand}/edit', [CarBrandController::class, 'edit'])->name('car-brands.edit');
    Route::delete('/car-brands/{carBrand}', [CarBrandController::class, 'destroy'])->name('car-brands.destroy');
});


Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
