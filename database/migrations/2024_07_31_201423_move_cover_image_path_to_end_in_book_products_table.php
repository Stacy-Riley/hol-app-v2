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
        Schema::table('book_products', function (Blueprint $table) {
            $table->dropColumn('cover_image_path');

            $table->string('cover_image_path')->after('num_pages_grade_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book_products', function (Blueprint $table) {
            $table->dropColumn('cover_image_path');

            $table->string('cover_image_path')->after('author');
        });
    }
};
