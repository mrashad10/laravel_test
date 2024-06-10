<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
}

/*
Original Model

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    // The attributes that are mass assignable.
    //
    // @var array<int, string>
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    // The attributes that should be hidden for serialization.
    //
    // @var array<int, string>
    protectedhidden = [
        'password',
        'remember_token',
    ];


    // The attributes that should be cast.
    //
    // @var array<string, string>
    protectedcasts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

*/