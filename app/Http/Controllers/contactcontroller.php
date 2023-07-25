<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;

class contactcontroller extends Controller
{
    public function contact(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $subject=$request->input('subject');
        $message=$request->input('message');
        $to="vishakvenu522@gmail.com";
        $message="name:$name,email:$email,subject:$subject,message:$message";
        Mail::raw($message,function($email) use($to){
          $email->to($to)->subject("subject");
    });
    return redirect('/');
    }
}
