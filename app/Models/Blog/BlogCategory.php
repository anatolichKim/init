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
        'title',
        'description',
        'slug',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
    ];
}
