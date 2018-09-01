<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class UserController extends Controller
{
    public function sendEmail(Request $request)
    {
        Email::create([
          'email' => $request->get('email'),
        ]);
        session()->flash('success','Мы свяжемся с вами в ближайшее время');
        return redirect()->back();
    }
}
