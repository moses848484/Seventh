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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('strategic_theme');
            $table->string('strategic_area');
            $table->string('strategic_objective');
            $table->string('kpi');
            $table->text('initiatives_activities');
            $table->integer('year');
            $table->decimal('q1_target', 5, 2)->default(0);  // If targets are mandatory, keep defaults
            $table->decimal('q2_target', 5, 2)->default(0);
            $table->decimal('q3_target', 5, 2)->default(0);
            $table->decimal('q4_target', 5, 2)->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('resource_persource')->nullable();
            $table->integer('budget_perinitiative');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score');
    }
};
