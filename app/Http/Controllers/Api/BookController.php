<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books with nested relationships.
     */
    public function index()
    {
        // Load relationships and append book_detail accessor
        $books = Book::with(['category', 'author'])->get()->map(function($book) {
            return [
                'id' => $book->id,
                'title' => $book->title,
                'price' => $book->price,
                'published_year' => $book->published_year,
                'created_at' => $book->created_at,
                'updated_at' => $book->updated_at,
                'category' => [
                    'id' => $book->category->id ?? null,
                    'name' => $book->category->name ?? null,
                    'description' => $book->category->description ?? null
                ],
                'author' => [
                    'id' => $book->author->id ?? null,
                    'name' => $book->author->name ?? null,
                    'bio' => $book->author->bio ?? null,
                    'email' => $book->author->email ?? null
                ],
                'book_detail' => [
                    'isbn' => $book->isbn ?? 'N/A',
                    'pages' => $book->pages ?? 0,
                    'language' => $book->language ?? 'English',
                    'format' => $book->format ?? 'Paperback',
                    'publisher' => $book->publisher ?? 'Unknown',
                    'edition' => $book->edition ?? 1
                ]
            ];
        });
        
        return response()->json([
            'success' => true,
            'data' => $books
        ], 200);
    }

    /**
     * Display the specified book with nested relationships.
     */
    public function show($id)
    {
        try {
            $book = Book::with(['category', 'author'])->findOrFail($id);
            
            $formattedBook = [
                'id' => $book->id,
                'title' => $book->title,
                'price' => $book->price,
                'published_year' => $book->published_year,
                'created_at' => $book->created_at,
                'updated_at' => $book->updated_at,
                'category' => [
                    'id' => $book->category->id ?? null,
                    'name' => $book->category->name ?? null,
                    'description' => $book->category->description ?? null
                ],
                'author' => [
                    'id' => $book->author->id ?? null,
                    'name' => $book->author->name ?? null,
                    'bio' => $book->author->bio ?? null,
                    'email' => $book->author->email ?? null
                ],
                'book_detail' => [
                    'isbn' => $book->isbn ?? 'N/A',
                    'pages' => $book->pages ?? 0,
                    'language' => $book->language ?? 'English',
                    'format' => $book->format ?? 'Paperback',
                    'publisher' => $book->publisher ?? 'Unknown',
                    'edition' => $book->edition ?? 1
                ]
            ];
            
            return response()->json([
                'success' => true,
                'data' => $formattedBook
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        }
    }
    public function uiIndex()
    {
        // Eager load relationships to prevent N+1 query problems
        $books = Book::with(['author', 'category', 'bookDetail'])->get();

        // Pass the collection data to the resources/views/books/index.blade.php template
        return view('books.index', compact('books'));
    }

    // Your store, update, and destroy methods here...
}