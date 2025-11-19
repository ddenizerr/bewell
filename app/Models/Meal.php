<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nutrition_plan_id',
        'day',
        'meal_type',
        'meal_name',
        'calories',
        'protein',
        'carbs',
        'fat',
        'description',
    ];

    protected $casts = [
        'day'       => 'integer',
        'calories'  => 'integer',
        'protein'   => 'decimal:2',
        'carbs'     => 'decimal:2',
        'fat'       => 'decimal:2',
        'meal_type' => 'string',
    ];


    /**
     * Get the nutrition plan this meal belongs to.
     */
    public function nutritionPlan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(NutritionPlan::class);
    }
}
