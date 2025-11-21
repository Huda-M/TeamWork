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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('target_user_id')->constrained('users');
            $table->foreignId('reporter_user_id')->constrained('users');
            $table->foreignId('admin_id')->nullable()->constrained('users');
            $table->enum('admin_action',['warning', 'suspension', 'promotion', 'contact'])->nullable();
            $table->text('description');
            $table->enum('status',['generated', 'reviewed', 'action_taken', 'resolved']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
