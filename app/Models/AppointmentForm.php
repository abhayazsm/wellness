<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentForm extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'date',
        'time',
    ];
}

