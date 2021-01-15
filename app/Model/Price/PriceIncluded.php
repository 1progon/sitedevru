<?php

namespace App\Model\Price;

use Illuminate\Database\Eloquent\Model;

class PriceIncluded extends Model
{
    public $table = 'price_included';

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
