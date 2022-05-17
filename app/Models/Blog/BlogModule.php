<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogModule extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo {
        return $this->belongsTo(BlogCourse::class, 'course_id');
    }

    /**
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }
}
