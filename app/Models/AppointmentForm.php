<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentForm extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'service',
        'date',
        'time',
    ];
}

