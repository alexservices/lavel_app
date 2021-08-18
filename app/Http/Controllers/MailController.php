<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    
    public function store(Request $request)
    {
        Mail::send('emails.contact',$request->all(), function($msj){
            $msj->subject('Contact email');
            $msj->to('personal.gallardo@gmail.com');
        });
       
        Session::flash('message','Email has been sent successfully');
        return redirect('/contact');
    }




}
