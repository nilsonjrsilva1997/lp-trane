<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotifyClient;
use Illuminate\Support\Facades\Mail;

class SendNotificationController extends Controller
{
    public function sendMail()
    {
        Mail::to('nilsonjrsilva1997@gmail.com')->send(new NotifyClient());
    }
}
