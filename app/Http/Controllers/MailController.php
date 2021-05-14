<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailFormValidationRequest;
use App\Jobs\SendEmailJob;
use App\Mail\Home;
use App\Models\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendemail(){

        return view('email.sendemail');

    }
    public function postemail(MailFormValidationRequest $request)
    {


        $array=collect($request->only(['email','subject', 'message']))->all();
        dispatch(new SendEmailJob($array));
//        Mail::to('support@example.com')->send(new Home($array));
        return redirect()->route('home');

}
}
