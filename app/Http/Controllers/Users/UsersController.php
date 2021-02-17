<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Model\User\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        //
    }

    public function adminIndex()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }
}
