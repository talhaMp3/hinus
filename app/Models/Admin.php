<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Use this to handle authentication
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;


    protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password'];
    
    protected $hidden = ['password', 'remember_token'];

}