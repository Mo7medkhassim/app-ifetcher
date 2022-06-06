<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Contact;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function index()
    {

        $users = User::get();
        $messages = Contact::get();
        $services = Service::get();


        return view('admin.home', compact('users','services','messages'));

    }// end of index

}//end of controller
