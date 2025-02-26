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
        Schema::create('event_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_comment_event_id')->constrained('events')->onDelete('cascade');
            $table->foreignId('event_comment_branch_id')->constrained('branches');
            $table->string('event_comment_user_name');
            $table->string('event_comment_user_email');
            $table->string('event_comment_subject');
            $table->text('event_comment_body');
            $table->enum('event_comment_status', ['pending', 'approved', 'canceled'])->default('pending');
            $table->foreignId('event_comment_action_user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_comments');
    }
};
