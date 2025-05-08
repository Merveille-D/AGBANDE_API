<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    #MANY TO MANY RELATIONSHIP(UN USER PEUT AVOIR PLUISIEURS ROLES & DE ME UN ROLE PEUT APPARTENIR A PLUISIEURS USERS)
    public function users() : BelongsToMany {
        return $this->BelongsToMany(User::class,'roles_users','role_id','user_id');
    }
}
