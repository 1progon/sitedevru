<?php

namespace App\Model\Testimonial;

use App\Model\User\User;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
