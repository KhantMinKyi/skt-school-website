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
        Schema::create('principal_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('principal_message_created_user_id')->constrained('users');
            $table->foreignId('principal_message_updated_user_id')->constrained('users');
            $table->foreignId('principal_message_branch_id')->constrained('branches');
            $table->text('principal_message');
            $table->string('principal_photo');
            $table->string('principal_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principal_messages');
    }
};
