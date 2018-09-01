<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class AdminController extends Controller
{
    public function getEmails()
    {
        $emails = Email::all();
        return view('emails',compact([
            'emails'
        ]));
    }
}
