<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'parent_id', 'order', 'is_active'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
    
}