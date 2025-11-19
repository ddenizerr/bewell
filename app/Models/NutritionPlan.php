<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NutritionPlan extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_id',
        'name',
        'start_date',
        'end_date',
        'daily_calories',
        'status',
        'notes',
    ];

    protected $casts = [
        'start_date'     => 'date',
        'end_date'       => 'date',
        'daily_calories' => 'integer',
        'status'         => 'string',
    ];


    /**
     * A nutrition plan belongs to a client.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * A nutrition plan has many meals.
     */
    public function meals(): HasMany
    {
        return $this->hasMany(Meal::class);
    }


}
