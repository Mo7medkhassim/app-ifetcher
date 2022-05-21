<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function index()
    {

        return view('admin.home');

    }// end of index

}//end of controller
