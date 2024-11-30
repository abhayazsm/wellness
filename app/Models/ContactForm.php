<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    // use HasFactory;

    // Define the fillable fields
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message'];
}
