<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use App\Models\BookDetail;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $authors = Author::factory(5)->create();
        $categories = Category::factory(5)->create();

       
        for ($i = 0; $i < 20; $i++) {
            
           
            $book = Book::factory()->create([
                'author_id' => $authors->random()->id,
                'category_id' => $categories->random()->id,
            ]);

           
            BookDetail::factory()->create([
                'book_id' => $book->id,
            ]);
        }
    }
}