<?php

namespace App\Model\Template;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'templates';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
