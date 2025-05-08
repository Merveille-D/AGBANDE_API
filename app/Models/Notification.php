<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'is_viewed',
        'message'
    ];

    #ONE TO MANY\INVERSE RELATIONSHIP(UNE NOTIFICATION PEUT APPARTENIR A UN ET UN SEUL USER)
    function receiver() : BelongsTo {
        return $this->belongsTo(User::class,'receiver_id');
    }

    #ONE TO MANY\INVERSE RELATIONSHIP(UNE NOTIFICATION PEUT APPARTENIR A UN ET UN SEUL USER)
    function sender() : BelongsTo {
        return $this->belongsTo(User::class,'sender_id');
    }

}
