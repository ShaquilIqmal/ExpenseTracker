<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user'; // Your custom table name

    protected $guarded = []; // Allows mass assignment for all attributes

    // Optionally, you can define fillable attributes
    protected $fillable = [
        'username', 
        'email', 
        'password',
    ];


}