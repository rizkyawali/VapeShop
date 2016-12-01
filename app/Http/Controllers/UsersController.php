<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use Sentinel;


class UsersController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function signup_store(UserRequest $request)
    {
        Sentinel::registerAndActivate($request->all());
        flash('User Has Been Created', 'success');
        return redirect('/');
    }

}
