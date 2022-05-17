<?php

namespace App\Models\Blog;

use Database\Factories\BlogCommentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogComment extends BlogCoreModel
{
    protected static function newFactory()
    {
        return BlogCommentFactory::new();
    }

    protected $fillable = [
        'user_id',
        'post_id',
        'parent_id',
        'message',
        'is_published'
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(BlogPost::class, 'post_id');
    }

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
