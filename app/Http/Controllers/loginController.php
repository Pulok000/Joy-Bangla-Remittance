<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    //
    function login()
    {
        return view('Pages.User.login');
    }
    public function loginConfirm(Request $req){

        $check = user::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($check){
            session()->put('userId',$check->id);
            session()->put('user',$check->name);

            return redirect()->route('udashboard');

        }
        
        return redirect()->route('login')->with('err', 'Wrong credentials');
        // return ['message'=>'These credentials do not match our records'];
        

    }

    
    public function logout(){
        session()->flush();
        return redirect()->route('home');
    }

}

// $registrstion = registration::where("name",$request->name)
// ->where("password",$request->password)
// ->first();

// if($registrstion)
// {
//    $request->session()->put("user",$registrstion->name);

//    setcookie('remember',$request->name, time()+36000);


//    return redirect()->route("admindesh");

// }
// return back();
// }