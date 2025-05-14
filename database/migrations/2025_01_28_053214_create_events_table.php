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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_banner');
            $table->longText('event_title');
            $table->date('event_created_date');
            $table->foreignId('event_created_user_id')->constrained('users');
            $table->foreignId('event_updated_user_id')->constrained('users');
            $table->foreignId('event_branch_id')->constrained('branches');
            $table->foreignId('event_category_id')->constrained('categories');
            $table->boolean('event_is_show_front')->default(0);
            $table->longText('event_body');
            $table->string('event_video')->nullable();
            $table->string('event_image')->nullable();
            $table->boolean('event_is_active')->default(1);
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->text('event_location', 100);
            $table->text('event_registration_fee', 50)->nullable();
            $table->text('event_time', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
