<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Laravel 11/12 compatible username authentication
     */
    public function username()
    {
        return 'username';
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
