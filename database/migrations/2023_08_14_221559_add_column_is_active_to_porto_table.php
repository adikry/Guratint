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
        Schema::table('porto', function (Blueprint $table) {
            $table->boolean('isActive');
            $table->boolean('forHomepage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('porto', function (Blueprint $table) {
            $table->dropColumn('isActive');
            $table->dropColumn('forHomepage');
        });
    }
};
