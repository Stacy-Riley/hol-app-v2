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
        Schema::table('press_posts', function (Blueprint $table) {
            DB::statement('ALTER TABLE press_posts MODIFY external_link_url VARCHAR(255) AFTER img_caption');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('press_posts', function (Blueprint $table) {
            DB::statement('ALTER TABLE press_post MODIFY external_link_url VARCHAR(255) AFTER original_column_name');
        });
    }
};
