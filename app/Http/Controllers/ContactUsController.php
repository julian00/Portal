<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactUs.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'message' => 'required'
        ]);

        $mail = new ContactUsMailable($request->all());
        Mail::to('ajarizaga@gmail.com')->send($mail);
        return redirect()->route('contactUs.index')->with('info','Mensaje enviado');
    }
}
