<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class uDashController extends Controller
{
    //
    function dashboard()
    {
        return view('Pages.User.userDashboard');
    }
    
    function searchUser(Request $request)
    {
        
                $uid = $request->id;
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

        

    }
    
}
