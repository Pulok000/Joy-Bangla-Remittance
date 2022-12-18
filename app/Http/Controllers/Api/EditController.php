<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class EditController extends Controller
{


function editProfile(Request $request)
{
    $this->validate(
        $request,
        [
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|max:255|unique:Users,email',
            'dob' => 'required|date|before:2001',
            'pass' => 'required|between:6,15',
            'cPass' => 'required|same:pass'

        ],
        [

            'name.required' => 'Please put your name',
            'name.min' => 'Name must be greater than 2 charcters',


            'email.required' => 'Please put your email',
            'email.unique' => 'your email should be unique',

            'dob.required' => 'Please put your password',
            'dob.before' => 'User Must be 18 Years old',

            'pass.required' => 'Please put your password',
            'pass.between' => 'your password should contain atleast 6 characters and highest 15 character',

            'cPass.required' => 'your password should match',
            'cPass.required' => 'your password should match',



        ]
    );


        $udname = $request->name;
        $udemail = $request->email;
        $uddob = $request->dob;
        $udpassword = $request->pass;
        $uid = session()->get('userId');
        $usetable = new Users();
        $userupdate = $usetable->where('id', $uid)->update(['name' => $request->name]);
        $userupdate = $usetable->where('id', $uid)->update(['email' => $request->email]);
        $userupdate = $usetable->where('id', $uid)->update(['dob' => $request->dob]);
        $userupdate = $usetable->where('id', $uid)->update(['password' => $request->pass]);

        session()->put('userId', $uid);
        session()->put('user', $udname);


        return response()->json([
            'message' => 'information updated'
        ], 200);
    
}


 
    public function profileView()
    {
        $usertable = new Users();
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
            }
            return response()->json([
                'uname' => $uname,
                'uid' => $uid,
                'uemail' => $uemail,
                'udob' => $udob,
                'upass' => $upass,
            ], 200);
        }
    }


    function deleteProfile(Request $request)
    {
        $uid = session()->get('userId');
        $usertable = new  Users();
        $userDeleted = $usertable->where('id', $uid)->delete();
        session()->flush();
        echo '<script>alert("Your Account is deleted")</script>';

        return response()->json([
            'message' => 'Profile deleted',
        ], 200);
    }

}