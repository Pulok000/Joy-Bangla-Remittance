<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    function postRegistration(Request $request)
    {


        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:20',
                'email' => 'required|email|max:255|unique:users,email',
                'dob' => 'required|date|before:2001',
                'pass' => 'required|between:6,15',
                'cPass' => 'required|same:pass'

            ],
            [

                'name.required' => 'Please put your name',
                'name.min' => 'Name must be greater than 2 charcters',


                'email.required' => 'Please put your email',
                'email.unique' => 'your email should be unique',

                'dob.required' => 'Please put your DOB',
                'dob.before' => 'User Must be 18 Years old',

                'pass.required' => 'Please put your password',
                'pass.between' => 'your password should contain atleast 6 characters and highest 15 character',

                'cPass.required' => 'your password should match',
                'cPass.required' => 'your password should match',



            ]
        );

        $usetable = new Users();
        $usetable->name = $request->name;
        $usetable->email = $request->email;
        $usetable->dob = $request->dob;
        $usetable->password = $request->pass;
        $usetable->save();

        // $user = $usetable;
        // Mail::to($request->email)->send(new WelcomeMail($user));

        return response()->json([
            'message' => 'Registration Successfull',
            'data' => $usetable
        ], 200);
    }
}
