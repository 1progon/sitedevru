<?php

namespace App\Model\Pros;

use Illuminate\Database\Eloquent\Model;

class Pros extends Model
{
    protected $fillable = ['title', 'img', 'description'];
    protected $table = 'our_pros';

    public function getRouteKeyName()
    {
        return 'id';
    }


}
