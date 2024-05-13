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
        Schema::table('human_requests', function (Blueprint $table) {
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('human_requests', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('phone');
        });
    }
};
