<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ui/books', [BookController::class, 'uiIndex'])->name('books.ui');
Route::get('/ui/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/ui/books', [BookController::class, 'store'])->name('books.store');
Route::get('/ui/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/ui/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/ui/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
// Routes សម្រាប់គ្រប់គ្រងអ្នកនិពន្ធ (Authors)
Route::get('/ui/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/ui/authors', [AuthorController::class, 'store'])->name('authors.store');

// Routes សម្រាប់គ្រប់គ្រងប្រភេទសៀវភៅ (Categories)
Route::get('/ui/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/ui/categories', [CategoryController::class, 'store'])->name('categories.store');