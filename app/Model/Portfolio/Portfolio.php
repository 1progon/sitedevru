<?php

namespace App\Model\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'meta_keywords',
        'description',
        'article',
        'on_homepage',
        'img',
        'img2',
        'img3',
        'url',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }


}
