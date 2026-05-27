<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function create()
    {
        return view('authors.create'); // បើកទៅកាន់ Form បង្កើតអ្នកនិពន្ធ
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', // បន្ថែម Validation
        ]);

        Author::create([
            'name' => $request->name,
            'email' => $request->email, // បន្ថែមការរក្សាទុក email ចូល Database
        ]);

        // នៅពេលរក្សាទុកជោគជ័យ វានឹងរុញត្រឡប់ទៅទំព័របញ្ជីសៀវភៅវិញជាមួយសារ Success
        return redirect()->route('books.ui')->with('success', 'បានបន្ថែមអ្នកនិពន្ធថ្មីដោយជោគជ័យ!');
    }
}