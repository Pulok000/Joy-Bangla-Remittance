<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    function profile()
    {
        return view('Pages.User.profile');
    }
}
