<?php

namespace App\Models\Blog;

use App\Models\Blog\BlogModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function courses(): HasMany {
        return $this->hasMany(BlogCourse::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(BlogPost::class);
    }
}
