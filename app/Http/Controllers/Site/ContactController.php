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

        return back()->with('Successfully', 'Thanks . ' . $request->name . ' , Your message has been sent!');
    }
}
