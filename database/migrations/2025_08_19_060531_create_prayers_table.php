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
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->enum('request_type', ['personal', 'family', 'health', 'financial', 'spiritual', 'other'])->default('personal');
            $table->text('prayer_request');
            $table->boolean('is_private')->default(false);
            $table->boolean('is_urgent')->default(false);
            $table->enum('status', ['pending', 'praying', 'answered', 'closed'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('prayed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayers');
    }
};