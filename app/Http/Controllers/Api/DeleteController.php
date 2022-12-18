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
 

}
