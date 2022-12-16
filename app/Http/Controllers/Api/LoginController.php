<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req)
    {

        $check = Users::where('email', $req->email)
            ->where('password', $req->password)
            ->first();
        if ($check) {
            session()->put('userId', $check->id);
            session()->put('user', $check->name);

            return response()->json([
                'message' => 'success',
                'user' => $check
            ], 200);
        }

        return response()->json([
            'message' => 'User not found'
        ], 401);
    }
}
