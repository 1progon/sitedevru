<?php

namespace App\Model\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public $table = 'portfolio';

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
