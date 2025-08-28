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
        Schema::create('primary_activity_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('primary_activity_created_user_id')->constrained('users');
            $table->foreignId('primary_activity_updated_user_id')->constrained('users');
            $table->foreignId('primary_activity_branch_id')->constrained('branches');
            $table->string('primary_activity_uid');
            $table->string('primary_activity_title');
            $table->string('primary_activity_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primary_activity_photos');
    }
};
