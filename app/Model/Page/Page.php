<?php

namespace App\Model\Page;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'meta_description',
        'meta_keywords',
        'title',
        'description',
        'article',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(PageImage::class);
    }

}
