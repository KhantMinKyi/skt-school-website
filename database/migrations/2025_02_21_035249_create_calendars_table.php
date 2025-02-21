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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calendar_created_user_id')->constrained('users');
            $table->foreignId('calendar_updated_user_id')->constrained('users');
            $table->foreignId('calendar_branch_id')->constrained('branches');
            $table->string('calendar_title')->nullable();
            $table->string('calendar_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
