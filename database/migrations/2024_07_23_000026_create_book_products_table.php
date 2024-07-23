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
        Schema::create('book_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->string('cover_image_path')->nullable();
            $table->integer('grade_1_cost');
            $table->integer('grade_2_cost');
            $table->integer('num_pages_grade_1');
            $table->integer('num_pages_grade_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_products');
    }
};
