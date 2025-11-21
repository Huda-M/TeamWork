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
        Schema::create('com_and_pro_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('interview_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('programmer_id')->constrained();
            $table->enum('evaluation_type', ['company_to_programmer', 'programmer_to_company']);
            $table->text('feedback');
            $table->integer('professionalism');
            $table->integer('rating');
            $table->timestamps();
            $table->unique(['interview_id', 'evaluation_type'],'eval_interview_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('com_and_pro_evaluations');
    }
};
