<?php

namespace App\Model\Template;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'templates';

    protected $fillable = [
        'name',
        'description',
        'article',
        'slug',
        'on_homepage',
        'img',
        'img2',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
