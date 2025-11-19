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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nutrition_plan_id')->constrained('nutrition_plans')->cascadeOnDelete();

            $table->tinyInteger('day')->nullable(); // 1..7 or sequential day
            $table->enum('meal_type', ['breakfast','lunch','dinner','snack'])->nullable();
            $table->string('meal_name', 255);
            $table->integer('calories')->nullable();
            $table->decimal('protein', 6, 2)->nullable(); // grams
            $table->decimal('carbs', 6, 2)->nullable();   // grams
            $table->decimal('fat', 6, 2)->nullable();     // grams
            $table->text('description')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['nutrition_plan_id', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
