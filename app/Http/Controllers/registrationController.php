<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class registrationController extends Controller
{
    function getRegistration()
    {
        return view('pages.user.registration');
    }
    function postRegistration(Request $request){

        
        $this->validate($request,
        [
            // 'name' => 'required||min:5||string',
            'email' => 'required || email:rfc,dns',
            // 'dob' => 'required|date|before:2001',
            'pass' => 'required'
            // 'confirmPass' => 'required'

        ],
        [
            // 'name.required'=>'*This field cant be empty',
            // 'name.min'=>'*Name should be atlest 5 characters',
            'email.string' =>'*This field should be a string',
            'email.required' =>'*This field cant be empty',
            'pass.required' => '*This field cant be empty'
            // 'dob.required' =>'*This field cant be empty',
            // 'dob.before' =>'*User should be above 18 years old to create account'
        ]
        );



        $output = "<h1> Submitted</h1>";
        // $output .="Name: ".$request->name;
        $output .="<br>Email: ".$request->email;
        // $output .="<br>Date of Birth: ".$request->dob;
        $output .="<br>Password: ".$request->pass;
        // $output .="<br>Confirm Password: ".$request->pass;
        return $output;

    }

}
