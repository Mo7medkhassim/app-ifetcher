<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ReqContact;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    } // end of contact

    public function store(ReqContact $request)
    {

        // return $request;

        Contact::create($request->all());

        // session()->flash('success', __('added successfully'));
        // return redirect()->route('admin.categories.index');
        if (app()->getLocale() == "en") {
            $message = "Your message has been sent!, We will contact you soon, Thanks";
        }else{
            $message = "تم الارسال بنجاح, سوف يتم التواصل معك قريبا , شكرا";

        }
        return redirect()->route('front.home')->with('Successfully', $message);
    }
}
