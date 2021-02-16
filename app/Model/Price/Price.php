<?php

namespace App\Model\Price;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'meta_keywords',
        'description',
        'on_homepage',
        'price',
        'img',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function included()
    {
        return $this->hasMany(PriceIncluded::class);
    }

}
