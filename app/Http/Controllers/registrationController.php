<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class registrationController extends Controller
{
    function getRegistration()
    {
        return view('pages.user.registration');
    }
    function postRegistration(Request $request){

        
        $this->validate($request,
        [
            'name'=>'required|min:3|max:20',
            'email'=>'required|email|max:255|unique:users,email',
            'dob' => 'required|date|before:2001',
            'pass'=>'required|between:6,15',
            'cPass'=>'required|same:pass'

        ],
        [

            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 2 charcters',

           
            'email.required'=>'Please put your email',
            'email.unique'=>'your email should be unique',

            'dob.required'=>'Please put your password',
            'dob.before'=>'User Must be 18 Years old',
            
            'pass.required'=>'Please put your password',
            'pass.between'=>'your password should contain atleast 6 characters and highest 15 character',

            'cPass.required'=>'your password should match',
            'cPass.required'=>'your password should match',


            
        ]
        );


        if (isset($error))
        {
        $output="<h1>Submitted</h1>";
        $output.="username: ".$request->name;
        $output.="<br>email: ".$request->email;
        $output.="<br>email: ".$request->dob;
        $output.="<br>lan: ".$request->password;
        return $output;
        }
        else{
            $usetable=new user();
            $usetable->name=$request->name;
            $usetable->email=$request->email;
            $usetable->dob=$request->dob;
            $usetable->password=$request->pass;
            $usetable->save();

    

            echo '<script>alert("Registration Completed")</script>';
          
            return view('Pages.User.login');
        }


    }

}
