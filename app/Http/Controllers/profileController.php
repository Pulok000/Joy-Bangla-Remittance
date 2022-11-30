<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\user;



class profileController extends Controller
{
    
    function profile()
    {
        return view('Pages.User.profile');
    }


    function profileView()
    {
        
        $usertable = new user();
        if (session()->has('userId')) {
            $uid = session()->get('userId');
            $user = $usertable->where('id', $uid);
            
            if (!empty($uid)) {
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
                
                $pass = $usertable->where('id', $uid)->pluck('password');
                foreach ($pass as $c) {
                    $upass = $c;
                }
                
                return view('Pages.User.profile')->with("uname", $uname)
                    ->with("uid", $uid)
                    ->with("uemail", $uemail)
                    ->with("udob", $udob)
                    ->with("upass", $upass);
            } else {
                $output = "Wrong Info";
                return $output;
                // return view('Pages.User.profile');
            }
        }

    }

    function editProfile()
    {
        return view('Pages.User.editProfile');
    }

    function submiteData(Request $request)
    {
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

        if (isset($error)) {
            $output = "<h1>Submitted</h1>";
            $output .= "udname: " . $request->name;
            $output .= "<br>udcontact: " . $request->contact;
            $output .= "<br>udemail: " . $request->email;
            $output .= "<br>udpassword: " . $request->password;
            return $output;
        } else {
            $udname = $request->name;
            $udemail = $request->email;
            $uddob = $request->dob;
            $udpassword = $request->pass;
            $uid = session()->get('userId');
            $usetable = new user();
            $userupdate = $usetable->where('id', $uid)->update(['name' => $request->name]);
            $userupdate = $usetable->where('id', $uid)->update(['email' => $request->email]);
            $userupdate = $usetable->where('id', $uid)->update(['dob' => $request->dob]);
            $userupdate = $usetable->where('id', $uid)->update(['password' => $request->pass]);

            session()->put('userId',$uid);
            session()->put('user',$udname);

            return redirect()->intended('/profile');

        }
    }

    function deleteProfile(Request $request)
    {
        $uid = session()->get('userId');
        $usertable = new  user();
        $userDeleted = $usertable->where('id', $uid)->delete();
        session()->flush();
        echo '<script>alert("Your Account is deleted")</script>';

        return view('Pages.User.home');
    }

    function apiShow(){
        return response()->json(user::all());
    }
    function apiAllUser()
    {
        return view('Pages.User.allUser');
    }

    function apiaddUser()
    {
        return view('Pages.User.adduser');
    }

    function apisubmitUser(Request $request)
    {
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
