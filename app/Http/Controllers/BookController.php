<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
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
        // ទាញទិន្នន័យសៀវភៅ ព្រមទាំងភ្ជាប់ជាមួយ Author, Category, និង Detail (Eager Loading)
        $books = Book::with(['author', 'category', 'bookDetail'])->get();

        // បញ្ជូនទិន្នន័យទៅកាន់ឯកសារ views/books/index.blade.php
        return view('books.index', compact('books'));
    }

    /**
     * បង្ហាញទម្រង់ Form សម្រាប់បញ្ចូលសៀវភៅថ្មី (Create)
     */
    public function create()
    {
        // ទាញយកទិន្នន័យ Author និង Category ពី Database ដើម្បីបង្ហាញជា Dropdown
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', compact('authors', 'categories'));
    }

    
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->price = $request->price ?? 0;
        $book->published_year = $request->published_year ?? date('Y');
        $book->author_id = $request->author_id;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('books.ui')->with('success', 'បញ្ចូលសៀវភៅថ្មីបានជោគជ័យ!');
    }

 
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->price = $request->price ?? $book->price;
        $book->published_year = $request->published_year ?? $book->published_year;
        $book->author_id = $request->author_id;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('books.ui')->with('success', 'កែប្រែទិន្នន័យបានជោគជ័យ!');
    }

    /**
     * លុបទិន្នន័យសៀវភៅចេញពី Database (Delete)
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.ui')->with('success', 'លុបសៀវភៅបានជោគជ័យ!');
    }
}
    // Your store, update, and destroy methods here...
