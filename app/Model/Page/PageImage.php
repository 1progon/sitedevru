<?php

namespace App\Model\Page;

use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
