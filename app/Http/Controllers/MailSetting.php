<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function sendForm(Request $request)
    {
        $name = $request->user_name;
        $phone = $request->user_phone;
        $address = $request->user_address;
        $comment = $request->user_comment;

        Mail::to('dartinstereo@mail.ru')->send(new MailClass($name, $phone, $address, $comment));

        return redirect()->back();
    }

    public function sendFeedback(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $msg = $request->msg;

        Mail::to('dartinstereo@mail.ru')->send(new Feedback($name, $email, $msg));

        return redirect()->back();
    }
}
