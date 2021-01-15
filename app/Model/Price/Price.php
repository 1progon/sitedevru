<?php

namespace App\Model\Price;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function included()
    {
        return $this->hasMany(PriceIncluded::class);
    }

}
