<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCategory extends BlogCoreModel
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

    public function modules(): HasMany {
        return $this->hasMany(BlogModule::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(BlogPost::class);
    }
}
