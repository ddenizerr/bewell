<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
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
        'notes',
        'status',
    ];


    protected $casts = [
        'date_of_birth'   => 'date',
        'height'          => 'decimal:2',
        'activity_level'  => 'string',
        'gender'          => 'string',
        'status'          => 'string',
    ];
}
