<?php

namespace App\Http\Controllers\Errors;

use App\Http\Controllers\Controller;

class ErrorsController extends Controller
{
    public function noAccess()
    {
        return view('error.no-access');
    }

    public function notActiveUser()
    {
        return view('error.not-active-user');
    }
}
