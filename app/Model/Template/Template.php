<?php

namespace App\Model\Template;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'templates';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'article',
        'meta_description',
        'meta_keywords',
        'on_homepage',
        'img',
        'img2',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
