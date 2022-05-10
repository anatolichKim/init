<?php

namespace App\Models\Blog;

use Database\Factories\BlogPostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPost extends BlogModel
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'course_id',
        'title',
        'text',
        'is_published'
    ];

    protected static function newFactory()
    {
        return BlogPostFactory::new();
    }

    public function category(): BelongsTo {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function course(): BelongsTo {
        return $this->belongsTo(BlogCourse::class, 'course_id');
    }

    public function comments(): HasMany {
        return $this->hasMany(BlogComment::class);
    }
}
