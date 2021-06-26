<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Surfside Media',
            'body' => 'This is for testing mail using mailhog'
        ];

        Mail::to("register@example.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
