<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthorController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('authors', AuthorController::class);

Route::apiResource('books', BookController::class);
Route::get('/books/{id}', [BookController::class, 'show']);