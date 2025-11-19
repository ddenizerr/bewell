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
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete();

            $table->date('date');
            $table->decimal('weight', 5, 2)->nullable(); // kg
            $table->text('notes')->nullable();
            $table->enum('mood', ['low','neutral','good','great'])->nullable();
            $table->enum('energy_level', ['low','medium','high'])->nullable();
            $table->json('measurements')->nullable(); // e.g., {"waist": 75, "hips": 95}
            $table->json('photos')->nullable();       // file paths or IDs

            $table->timestamps();

            $table->unique(['client_id','date']); // 1 check-in per day per client
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_ins');
    }
};
