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
            'email'    =>  'required|email',
            'password' =>  'required|min:6',
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/homeOrg');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function successlogin()
    {
        return view('homeOrg');
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
