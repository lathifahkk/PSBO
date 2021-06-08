<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'    =>  'required|email_user',
            'password' =>  'required|password_user',
        ]);

        $user_data = array(
            'email'     => $request->get('email_user'),
            'password'  => $request->get('password_user')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('homeMhs');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function successlogin()
    {
        return view('homeMhs');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    // public function getLogin(){
    //     return view('login');
    // }

    // public function postLogin(Request $request){
    //     dd($request->all());
    // }
}
