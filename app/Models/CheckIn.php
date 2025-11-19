<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'date',
        'weight',
        'notes',
        'mood',
        'energy_level',
        'measurements',
        'photos',
    ];

    protected $casts = [
        'date'         => 'date',
        'weight'       => 'decimal:2',
        'measurements' => 'array', // json → array
        'photos'       => 'array', // json → array
        'mood'         => 'string',
        'energy_level' => 'string',
    ];

    /**
     * A check-in belongs to a client.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
