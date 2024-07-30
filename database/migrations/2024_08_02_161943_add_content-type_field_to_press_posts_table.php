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
            Schema::table('press_posts', function (Blueprint $table) {
                $table->string('content_type')->after('is_published');
            });

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('press_posts', function (Blueprint $table) {
            $table->dropColumn('content_type');
        });
    }
};
