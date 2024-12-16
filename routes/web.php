<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

// for redirect to create page
Route::view('create', 'create')->name('create');
// for send data to database
Route::post('add', [TodoController::class, 'insert'])->name('add');

// for redirect to update page with id
Route::get('update/{id}', [TodoController::class, 'update'])->name('update');
// for save updated data in database
Route::post('edit', [TodoController::class, 'edit'])->name('edit');

// for redirect to delete page
Route::get('delete/{id}', [TodoController::class, 'delete'])->name('delete');