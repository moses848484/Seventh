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
            $table->enum('request_type', ['personal', 'family', 'health', 'financial', 'spiritual', 'other']);
            $table->text('prayer_request');
            $table->boolean('is_urgent')->default(false);
            $table->boolean('is_private')->default(false);
            $table->enum('status', ['pending', 'approved', 'answered', 'archived'])->default('pending');
            $table->timestamps();
            
            // Indexes for better performance
            $table->index(['status', 'created_at']);
            $table->index(['is_private', 'status']);
            $table->index('is_urgent');
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