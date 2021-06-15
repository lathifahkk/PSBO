<?php

namespace App\Http\Controllers\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Org;
use Illuminate\Support\Facades\Auth;

class OrgController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:orgs,email',
           'lembaga'=>'required',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $org = new Org();
        $org->name = $request->name;
        $org->email = $request->email;
        $org->lembaga = $request->lembaga;
        $org->password = \Hash::make($request->password);
        $save = $org->save();

        if( $save ){
            return redirect()->back()->with('success','Yeay! Akunmu sekarang sudah terdaftar.');
        }else{
            return redirect()->back()->with('fail','Oops! Terdapat kesalahan registrasi akun.');
        }
  }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
            'email'=>'required|email|exists:orgs,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'Email belum terdaftar'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('org')->attempt($creds) ){
            return redirect()->route('org.home');
        }else{
            return redirect()->route('org.login')->with('fail','Ada kesalahan pada email atau password nya. Coba lagi yuk!');
        }
    }

    function logout(){
        Auth::guard('org')->logout();
        return redirect('/');
    }
}
