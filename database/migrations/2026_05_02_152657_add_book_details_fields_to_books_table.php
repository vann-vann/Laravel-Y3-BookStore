<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up(): void
{
    Schema::table('books', function (Blueprint $table) {
        // Adding the fields your controller expects
        if (!Schema::hasColumn('books', 'price')) {
            $table->decimal('price', 8, 2)->nullable()->after('title');
        }
        if (!Schema::hasColumn('books', 'published_year')) {
            $table->integer('published_year')->nullable()->after('price');
        }
        if (!Schema::hasColumn('books', 'isbn')) {
            $table->string('isbn')->nullable()->after('published_year');
        }
        if (!Schema::hasColumn('books', 'pages')) {
            $table->integer('pages')->nullable();
        }
        // Add others (language, format, etc.) if they aren't in your book_details table
    });
}

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn(['isbn', 'pages', 'language', 'format', 'publisher', 'edition']);
        });
    }
};