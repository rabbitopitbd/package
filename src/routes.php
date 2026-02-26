<?php

use Illuminate\Support\Facades\Route;
use devrabbi\Crudpackage\Http\Controllers\CrudController;

Route::middleware('web')->prefix('crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud.index');
    Route::get('/create', [CrudController::class, 'create'])->name('crud.create');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
    Route::get('/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::put('/{id}/update', [CrudController::class, 'update'])->name('crud.update');
    Route::delete('/{id}/destroy', [CrudController::class, 'destroy'])->name('crud.destroy');
});
