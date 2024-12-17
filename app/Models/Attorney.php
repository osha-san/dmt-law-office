<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Attorney extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'control_number',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', // Hide password in JSON responses
    ];
}

