<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationSuccess;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendRegistrationSuccess(Request $r)
    {
        $regSuccess = new RegistrationSuccess('Eedee');

        Mail::to($r->get('email_address'))->send($regSuccess);

        return 'Mail sent successfully';
        
    }
}
