<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'button_text',
        'button_link',
        'background_color',
        'priority',
        'status'
    ];
}
