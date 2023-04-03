<?php

namespace App\Http\Controllers;

use App\Jobs\ProccessNewsLetter;
use App\Mail\NewsLetter;
use App\Mail\TestSendingEmail;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index()
    {
        $persons = Person::all();
        Mail::to('tonycooper@gmail.com')->send(new TestSendingEmail($persons));
    }

    public function sendNewsLetter()
    {
        $emails = User::pluck('email');
        // dd($emails);

        foreach ($emails as $email) {
            // Mail::to($email)->send(new NewsLetter());
            ProccessNewsLetter::dispatch($email);
        }
    }
}
