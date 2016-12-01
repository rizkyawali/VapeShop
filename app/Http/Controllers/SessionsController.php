<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;

use Sentinel;


class SessionsController extends Controller
{
    public function getSignin()
    {
        if ($user = Sentinel::check())
        {
            flash($user->email.' Has Signin', 'info');
            return redirect('/');
        }
        else
        {
            return view('shop.index');
        }
    }

    public function postSignin(SessionRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all()))
        {
            flash('Welcome '.$user->email, 'info');
            return redirect()->intended('/');
        }
        else
        {
            flash('Login Fails', 'warning');
            return view('shop.index');
        }
    }

    public function signout()
    {
        Sentinel::logout();
        flash('You Has Signout', 'info');
        return redirect('/');
    }
}
