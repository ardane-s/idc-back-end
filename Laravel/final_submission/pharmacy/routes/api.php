<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('drugs')->group(function () {
    Route::get('/', [DrugController::class, 'index'])->name('drugs.index');
    Route::post('/', [DrugController::class, 'store'])->name('drugs.store');
    Route::get('/{drug}', [DrugController::class, 'show'])->name('drugs.show');
    Route::put('/{drug}', [DrugController::class, 'update'])->name('drugs.update');
    Route::delete('/{drug}', [DrugController::class, 'destroy'])->name('drugs.destroy');
});

Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
    Route::put('/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
});

Route::prefix('sales')->group(function () {
    Route::get('/', [SalesController::class, 'index'])->name('sales.index');
    Route::post('/', [SalesController::class, 'store'])->name('sales.store');
    Route::get('/{sales}', [SalesController::class, 'show'])->name('sales.show');
    Route::put('/{sales}', [SalesController::class, 'update'])->name('sales.update');
    Route::delete('/{sales}', [SalesController::class, 'destroy'])->name('sales.destroy');
});
