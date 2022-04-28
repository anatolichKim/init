<?php

namespace App\Models\Blog;

use App\Models\Blog\BlogModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends BlogModel
{
    protected $table = 'blog_categories';

    protected $fillable = [
        'parent_id',
        'slug',
        'description',
        'title'
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];
}
