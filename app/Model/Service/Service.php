<?php

namespace App\Model\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

}