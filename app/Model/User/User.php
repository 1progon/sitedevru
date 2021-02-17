<?php

namespace App\Model\User;

use App\Model\Testimonial\Testimonial;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'first_name',
        'last_name',
        'patronymic_name',
        'email',
        'email_verified_at',
        'password',
        'active',
        'remember_token',
    ];


    const STATUS = [
        'deactivated' => 0,
        'active' => 1,
        'banned' => 2,
        'removed' => 3,
        'archived' => 4
    ];


    const ROLE = [
        'user' => 0,
        'admin' => 1,
        'manager' => 2,
        'editor' => 3
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
