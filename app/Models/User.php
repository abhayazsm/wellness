<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'last_name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->last_name ? "{$this->name} {$this->last_name}" : "{$this->name}";
    }

    public function setPasswordAttribute($value)
    {
        // Skip setting password during login or password update
        if ($this->exists && $value === $this->attributes['password']) {
            return; // Don't change the password if it's the same
        }

        if (\Illuminate\Support\Facades\Hash::needsRehash($value)) {
            $this->attributes['password'] = bcrypt($value);
        } else {
            $this->attributes['password'] = $value;
        }
    }

    

}


