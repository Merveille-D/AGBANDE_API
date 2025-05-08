<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */

    protected $fillable = [
        'name',
        'image'
    ];

    #ONE TO MANY RELATIONSHIP(UN TYPE DE MOYEN DE TRANSPORT PEUT AVOIR PLUISIEURS MOYENS DE TRANSPORT QUI LUI SONT ASSOCIES)
    function transports() : HasMany {
        return $this->hasMany(Transport::class)->where(["status"=>2]);
    }
}
