<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Add this import
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory; // 2. Add this line inside the class

    protected $fillable = [
        'book_id',
        'description',
        'published_date',
        'isbn',
    ];

    // Ensure your relationship is defined
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}