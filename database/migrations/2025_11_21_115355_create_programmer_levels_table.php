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
        Schema::create('programmer_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programmer_id')->constrained();
            $table->integer('current_level');
            $table->integer('current_xp');
            $table->integer('xp_to_next_level');
            $table->integer('ranking_position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmer_levels');
    }
};
