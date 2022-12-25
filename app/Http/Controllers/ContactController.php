<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(){
        $contact_form = request()->all();
        Mail::to('saidulislam7733@gmail.com')->send(new ContactMail($contact_form));

        return redirect()->route('home','/#contact')->with('success','Your Message Has Been Send Successfully');
        }


}