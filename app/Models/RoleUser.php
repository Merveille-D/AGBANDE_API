<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "role_id",
    ];

    protected $table = "roles_users";
}
