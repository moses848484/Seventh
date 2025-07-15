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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('no')->nullable();
            $table->string('strategic_areas')->nullable();
            $table->string('strategic_theme')->nullable();
            $table->string('strategic_objectives')->nullable();
            $table->string('kpis')->nullable();
            $table->string('initiatives')->nullable();
            $table->string('status_color')->nullable();
            $table->string('total_target')->nullable();
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3')->nullable();
            $table->string('q4')->nullable();
            $table->string('budget_per_initiative')->nullable();
            $table->string('explanation_of_variation')->nullable();
            $table->string('resource_persource')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
