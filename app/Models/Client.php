<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'height',
        'goal',
        'medical_conditions',
        'allergies',
        'dietary_preferences',
        'activity_level',
        'status',
        'address',
        'user_id',
    ];

    protected $casts = [
        'date_of_birth'   => 'date',
        'height'          => 'decimal:2',
        'status'          => 'string',
        'gender'          => 'string',
        'activity_level'  => 'string',
    ];

    /**
     * A client belongs to a user (assigned coach/nutritionist).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * A client has many nutrition plans.
     */
    public function nutritionPlans(): HasMany
    {
        return $this->hasMany(NutritionPlan::class);
    }
}
