<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
use Session;


class LoginController extends Controller
{
    public function signin(Request $request)
	{
	    // Retrive Input
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {

            // if success login
            DB::table('sessions')->where('id','!=',session()->getId())->where('user_id',auth()->user()->id)->delete();
            return redirect('dashboard');
        }



        // if failed login
        session()->flash('status', 'Wrong credentials, please try again!');
        return redirect('/');
    }

    public function signout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }
}
