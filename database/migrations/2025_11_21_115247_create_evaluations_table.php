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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluator_id')->constrained('programmers');
            $table->foreignId('evaluated_id')->constrained('programmers');
            $table->foreignId('project_id')->constrained();
            $table->integer('technical_quality');
            $table->integer('timeliness');
            $table->integer('teamwork');
            $table->integer('communication');
            $table->integer('final_score');
            $table->text('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
