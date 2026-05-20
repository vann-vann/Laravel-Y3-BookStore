<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // This safely adds the relationship columns to your books table
            if (!Schema::hasColumn('books', 'author_id')) {
                $table->foreignId('author_id')->nullable()->constrained()->onDelete('cascade');
            }
            if (!Schema::hasColumn('books', 'category_id')) {
                $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['category_id']);
            $table->dropColumn(['author_id', 'category_id']);
        });
    }
};