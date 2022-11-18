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
    
}
