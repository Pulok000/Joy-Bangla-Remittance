<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    //

    function index()
    {
     return view('Pages.User.messageBox');
    }

    function send(Request $request)
    {
        $admin="admin@aiub.edu";

        $this->validate($request,
        ['name'=>'required', 
        'email' => 'email|required',
        'message' =>  'required']
        );
        if(isset($error))
        {
    return $output;
        }
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            
            'message'   =>   $request->message
        );

     Mail::to($admin)->send(new sendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }

}
