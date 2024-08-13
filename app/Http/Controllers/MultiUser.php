<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiUser extends Controller
{
    public function index(){
        return view ('login.login');
    }

    function login( Request $request){

        $request -> validate([
            'email'=> 'required',
            'password'=> 'required',


        ],[
            'email.required'=> 'Email wajib di isi',
            'password.required'=> 'Password wajib di isi'

        ]);

    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){

            return redirect('/dashboard');
        }else {
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }
}
