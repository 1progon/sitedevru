<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public $table = 'blog_posts';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return$this->belongsTo(BlogCategories::class);
    }

}
