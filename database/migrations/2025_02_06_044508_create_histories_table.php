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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('history_created_user_id')->constrained('users');
            $table->foreignId('history_updated_user_id')->constrained('users');
            $table->foreignId('history_branch_id')->constrained('branches');
            $table->text('history_body');
            $table->string('history_title');
            $table->string('history_photo');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
