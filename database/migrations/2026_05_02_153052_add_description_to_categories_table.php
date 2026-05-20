<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::table('categories', function (Blueprint $table) {
        // We ONLY care about the description here. 
        // If email is being added elsewhere, let those files handle it.
        if (!Schema::hasColumn('categories', 'description')) {
            $table->text('description')->nullable();
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
};
