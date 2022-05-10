<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCourse extends BlogModel
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'is_published',
        'slug',
        'published_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function posts(): HasMany {
        return $this->hasMany(BlogPost::class);
    }
}
