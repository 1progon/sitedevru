<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    protected $table = 'blog_categories';

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function posts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
