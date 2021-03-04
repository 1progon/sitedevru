<?php

namespace App\Model\Template;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'templates';

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
        'url',
        'url_original_link',
        'cms',
        'framework',
        'backend',
        'frontend',
        'established',
        'site_type',
        'additional_info',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
