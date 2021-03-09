<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'on_homepage',
        'meta_description',
        'meta_keywords',
        'description',
        'article',
        'img',
        'img2',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
