<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'on_homepage',
        'description',
        'img',
        'img2',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
