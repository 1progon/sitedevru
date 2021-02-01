<?php

namespace App\Model\Contact;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contact_form';

    protected $fillable = ['name_author', 'email_author', 'subject', 'message'];
}
