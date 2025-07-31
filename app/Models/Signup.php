<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Signup extends Authenticatable
{
    use HasFactory, Notifiable;
       protected $table = 'users';
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
     protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];
}
