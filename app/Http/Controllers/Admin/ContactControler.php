<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactControler extends Controller
{
    // public function index() {

    //     $messages = Contact::all();
    //     $messages = $messages->sortByDesc('id');
    //     return view('admin.messages.index', compact('messages'));
    // }

    // public function show( $id) {

    //     $message =  Contact::find($id);


    //     return view('admin.messages.message-details', compact('message'));
    // }
}
