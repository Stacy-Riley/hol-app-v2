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
        Schema::dropIfExists('book_products');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('book_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->integer('grade_level');
            $table->decimal('grade_1_cost', 8, 2)->nullable();
            $table->decimal('grade_2_cost', 8, 2)->nullable();
            $table->integer('num_pages_grade_1')->nullable();
            $table->integer('num_pages_grade_2')->nullable();
            $table->string('cover_image_path')->after('num_pages_grade_2');
            $table->timestamps();
        });
    }
};
