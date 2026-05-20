<?php

use Illuminate\Support\Facades\Route;

// Change this line to include "\Api" 
use App\Http\Controllers\Api\BookController; 

Route::get('/', function () {
    return view('welcome');
});

// Your web UI route remains exactly the same!
Route::get('/ui/books', [BookController::class, 'uiIndex'])->name('books.ui');