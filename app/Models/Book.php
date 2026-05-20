<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'author_id',
        'description',
        'price',
        'published_year',
        'category_id'
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Accessor for book_detail (custom nested object)
    public function getBookDetailAttribute()
    {
        return [
            'isbn' => $this->isbn ?? 'N/A',
            'pages' => $this->pages ?? 0,
            'language' => $this->language ?? 'English',
            'format' => $this->format ?? 'Paperback',
            'publisher' => $this->publisher ?? 'Unknown'
        ];
    }
    public function bookDetail()
    {
        return $this->hasOne(BookDetail::class);
    }
}