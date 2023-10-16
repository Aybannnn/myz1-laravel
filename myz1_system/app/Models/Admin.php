<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'admin';
    
    protected $fillable = [
        'aemail',
        'apassword',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}