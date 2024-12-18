<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAssetController;

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

Route::get('/admin', [AdminController::class, 'loginAdmin']);
Route::post('/admin', [AdminController::class, 'postLoginAdmin']);

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    //categories
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    });
    //location
    Route::prefix('locations')->group(function () {
        Route::get('/', [LocationController::class, 'index'])->name('locations.index');
        Route::get('/create', [LocationController::class, 'create'])->name('locations.create');
        Route::post('/', [LocationController::class, 'store'])->name('locations.store');
        Route::get('/{id}/edit', [LocationController::class, 'edit'])->name('locations.edit');
        Route::post('/{id}', [LocationController::class, 'update'])->name('locations.update');
        Route::get('/{id}', [LocationController::class, 'delete'])->name('locations.delete');
    });
    //asset
    Route::prefix('assets')->group(function () {
        Route::get('/', [AdminAssetController::class, 'index'])->name('assets.index');
        // Route::get('/create', [LocationController::class, 'create'])->name('locations.create');
        // Route::post('/', [LocationController::class, 'store'])->name('locations.store');
        // Route::get('/{id}/edit', [LocationController::class, 'edit'])->name('locations.edit');
        // Route::post('/{id}', [LocationController::class, 'update'])->name('locations.update');
        // Route::get('/{id}', [LocationController::class, 'delete'])->name('locations.delete');
    });
});


