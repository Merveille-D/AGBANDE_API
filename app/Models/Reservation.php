<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'fret',
        'price',
        "charg_date",
        'info',
        "fret",
        "transport",
        "owner"
    ];

    function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function fret(): BelongsTo
    {
        return $this->belongsTo(Frets::class, "fret");
    }

    function transport(): BelongsTo
    {
        return $this->belongsTo(Transport::class, "transport");
    }
}
