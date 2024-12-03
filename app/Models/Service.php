<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ['title', 'slug', 'short_desc', 'content', 'image', 'side_image', 'footer_first_image', 'footer_second_image'];
}
