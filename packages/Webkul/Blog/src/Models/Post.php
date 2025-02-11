<?php

namespace Webkul\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webkul\Admin\Listeners\Admin;
use Webkul\Blog\Contracts\Post as PostContract;

class Post extends Model implements PostContract
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status'
    ];


    /**
    * Get the user that owns the post.
    */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }

}
