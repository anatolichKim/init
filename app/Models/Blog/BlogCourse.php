<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogCourse extends BlogModel
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'is_published'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
