<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(){
        return view('form');
    }
    function getvalidation(Request $request){
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|integer',
                'password' => 'required|integer|digits_between:1,10',
                'password_' => 'required|confirmed'
            ]
        );
        print_r($request->all());
    }
}