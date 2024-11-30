<?php

// app/Models/Blog.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'image', 'category_id', 'author', 'comments_count'];

    // Define the relationship to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the relationship to Tags (many-to-many)
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
    
}

