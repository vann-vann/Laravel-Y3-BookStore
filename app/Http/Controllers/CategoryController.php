<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create'); // បើកទៅកាន់ Form បង្កើតប្រភេទសៀវភៅ
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('books.ui')->with('success', 'បានបន្ថែមប្រភេទសៀវភៅថ្មីដោយជោគជ័យ!');
    }
}