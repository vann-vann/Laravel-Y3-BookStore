<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            // Check if 'bio' doesn't exist before adding it
            if (!Schema::hasColumn('authors', 'bio')) {
                $table->text('bio')->nullable()->after('name');
            }

            // Check if 'email' doesn't exist before adding it
            if (!Schema::hasColumn('authors', 'email')) {
                $table->string('email')->nullable()->unique()->after('bio');
            }
        });
        
        // Also check for the categories table since the filename mentioned it
        Schema::table('categories', function (Blueprint $table) {
            if (!Schema::hasColumn('categories', 'description')) {
                $table->text('description')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn(array_filter(['bio', 'email'], function($column) {
                return Schema::hasColumn('authors', $column);
            }));
        });
    }
};