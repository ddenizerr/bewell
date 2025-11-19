<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;


    protected $fillable = [
        'client_id',
        'date',
        'time',
        'type',
        'status',
        'notes',
    ];

    protected $casts = [
        'date'   => 'date',
        'time'   => 'datetime:H:i',
        'status' => 'string',
    ];

    /**
     * An appointment belongs to a client.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
