<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ReqContact;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function send(ReqContact $request)
    {

        // return $request;
        $name = $request->name;
        // $phone = $request->phone;
        $email = $request->email;
        // $message = $request->message;

        $user_contact = compact('name');

        // sending email
        // Mail::to('kassimsd350@gmail.com')->send( new ContactMail($user_contact));

        Contact::create($request->all());

        // session()->flash('success', __('added successfully'));


        if (app()->getLocale() == "en") {
            $message = "Your message has been sent!, We will contact you soon, Thanks";
        } else {
            $message = "تم الارسال بنجاح, سوف يتم التواصل معك قريبا , شكرا";
        }

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
       }else{

            return redirect()->route('front.home')->with('Successfully', $message);
          }

    }
}
