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
        Schema::create('primary_newsletters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('primary_newsletter_created_user_id')->constrained('users');
            $table->foreignId('primary_newsletter_updated_user_id')->constrained('users');
            $table->foreignId('primary_newsletter_branch_id')->constrained('branches');
            $table->string('primary_newsletter_title');
            $table->string('primary_newsletter_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primary_newsletters');
    }
};
