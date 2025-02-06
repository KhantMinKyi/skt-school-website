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
        Schema::create('statements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('statement_created_user_id')->constrained('users');
            $table->foreignId('statement_updated_user_id')->constrained('users');
            $table->foreignId('statement_branch_id')->constrained('branches');
            $table->string('statement_photo');
            $table->text('statement_vision');
            $table->text('statement_mission');
            $table->text('statement_philosophy');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statements');
    }
};
