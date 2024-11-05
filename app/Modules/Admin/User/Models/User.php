<?php

namespace App\Modules\Admin\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'status',
    ];
    protected $hidden = [
        'password',
    ];

}
