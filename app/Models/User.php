<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'role',
        'is_active',
        'last_login'
    ];

    protected $hidden = [
        'password',
    ];
    public function conversations()
    {
        return $this->belongsToMany(Conversation::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function updateLastLogin()
    {
        $this->update(['last_login' => now()]);
        logger('Last login updated for user: ' . $this->name);
    }
    
}
