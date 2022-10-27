<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //getRegistration

    function getRegistration(){
        return view('register');
    }
    function postRegistration(Request $request){

        // return view('register',['name'=>$name,'email'=>'abc@email.com']);
        $this->validate($request,
        [
            'nam56e' => 'required||min:5||string',
            'email' => 'required||min:5',
        ],
        [
            'required' => 'it9yt'
        ]
    );

    $output = "<h1> Submitted</h1>";
    $output ="Name: ".$request->name;
    $output ="<br>Email: ".$request->email;
    return $output;

    }
}
