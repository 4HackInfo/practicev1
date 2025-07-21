<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function show(){
        return view('register');
    }

    public function submit(Request $req){

        $validate  = $req->validate([
            'username' => 'string | required',
            'password' => 'string | required',
        ]);

        return redirect()->route('contact')->with('success',"{$validate['username']} was Registered");
    }
}
