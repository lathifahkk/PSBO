<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function show(){
        return view('home');
    }

    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

        if( $save ){
            return redirect()->back()->with('success','Yeay! Akunmu sekarang sudah terdaftar.');
        }else{
            return redirect()->back()->with('fail','Oops! Terdapat kesalahan registrasi akun.');
        }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'Email belum terdaftar'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            $data = Event::all();
            return redirect()->route('user.home', ['events'=>$data]);
        }else{
            return redirect()->route('user.login')->with('fail','Ada kesalahan pada email atau password nya. Coba lagi yuk!');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

    function detail($id_event){
        return Event::find($id_event);
    }
}
