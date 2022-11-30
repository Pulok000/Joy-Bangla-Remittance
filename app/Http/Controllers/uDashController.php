<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\user;

class uDashController extends Controller
{
    //
    function dashboard()
    {
        return view('Pages.User.userDashboard');
    }
    
    function searchUser(Request $request)
    {
        
      // return $data=user::
        // where('name','like','%'.$request->input('search').'%')->get();
        $usertable = new user();
        $uname="";
        $uemail="";
        $udob="";
    if($request->search){
        $uid = $request->input('search');
        $name = $usertable->where('id', $uid)->pluck('name');
        foreach ($name as $n) {
            $uname = $n;
        }
        $email = $usertable->where('id', $uid)->pluck('email');
        foreach ($email as $c) {
            $uemail = $c;
        }
        $dob = $usertable->where('id', $uid)->pluck('dob');
        foreach ($dob as $c) {
            $udob = $c;
        }
        return view('Pages.User.userSearch')->with("uname", $uname)
        ->with("uid", $uid)
        ->with("uemail", $uemail)
        ->with("udob", $udob);
        // echo '<script>alert("search is working")</script>';
        // return view('Pages.User.userSearch');

        // return view('Pages.User.userSearch')->with("uname", $uname)
        //     ->with("uid", $uid)
        //     ->with("uemail", $uemail)
        //     ->with("udob", $udob);

    }
    else{
        return view('Pages.User.userSearch');
    }

    // return response()->json(user::all());

    }
    
}
