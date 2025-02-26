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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_comment_post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('post_comment_branch_id')->constrained('branches');
            $table->string('post_comment_user_name');
            $table->string('post_comment_user_email');
            $table->string('post_comment_subject');
            $table->text('post_comment_body');
            $table->enum('post_comment_status', ['pending', 'approved', 'canceled'])->default('pending');
            $table->foreignId('post_comment_action_user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
