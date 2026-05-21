<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ui/books', [BookController::class, 'uiIndex'])->name('books.ui');
Route::get('/ui/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/ui/books', [BookController::class, 'store'])->name('books.store');
Route::get('/ui/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/ui/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/ui/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');