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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_created_user_id')->constrained('users');
            $table->foreignId('teacher_updated_user_id')->constrained('users');
            $table->foreignId('teacher_branch_id')->constrained('branches');
            $table->string('teacher_name')->nullable();
            $table->enum('teacher_class', ['primary', 'secondary', 'lower-secondary', 'kg', 'assistant', 'principal', 'vice-principal'])->nullable();
            $table->string('teacher_photo');
            $table->string('teacher_types', 100);
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
