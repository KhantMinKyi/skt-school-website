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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_created_user_id')->constrained('users');
            $table->foreignId('gallery_updated_user_id')->constrained('users');
            $table->foreignId('gallery_branch_id')->constrained('branches');
            $table->string('gallery_title')->nullable();
            $table->string('gallery_photo');
            $table->enum('gallery_category', ['building', 'class', 'lab', 'playground']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
