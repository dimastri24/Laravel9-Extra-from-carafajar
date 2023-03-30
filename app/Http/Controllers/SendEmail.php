<?php

namespace App\Http\Controllers;

use App\Mail\TestSendingEmail;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index()
    {
        $persons = Person::all();
        Mail::to('tonycooper@gmail.com')->send(new TestSendingEmail($persons));
    }
}
