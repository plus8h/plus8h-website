<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Mailgun\Mailgun;

class MailController extends Controller
{

    public function send(Request $request) {
        $interest = $request->get('select');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $company = $request->input('company');
        $email = $request->input('email');
        $enquiry = $request->input('enquiry');
        $contents = [
            'Area of Interest:'.$interest,
            'First Name:'.$firstName,
            'Last Name:'.$lastName,
            'Company'.$company,
            'Email'.$email,
            'Enquiry'.$enquiry,
        ]; 
        // Mail::send() return is null,so call dd() check data
        Mail::send(
            'mail.mail',                                            //blade page 
            ['contents'=>$contents],                                //form data
            function($message){                                     
                $to = 'max.twisselmann@plus8h.com'; 

                $message ->to($to)->subject('from +8h.com website'); 
            }
        ); 

        // dd(Mail::failures());

        // echo user from data
        // dd($contents);
		return redirect('/contact')->with('message', 'success');
    } 
}