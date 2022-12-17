<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;


class DeleteController extends Controller
{
    
    function deleteProfile(Request $request)
    {
        $uid = session()->get('userId');
        $usertable = new  Users();
        $userDeleted = $usertable->where('id', $uid)->delete();
        session()->flush();
        echo '<script>alert("Your Account is deleted")</script>';

        return response()->json([
            'message' => 'Profile updated successfully',
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


}
