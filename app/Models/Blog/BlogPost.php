<?php

namespace App\Models\Blog;

use Database\Factories\BlogPostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends BlogModel
{
    use HasFactory;

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
}
