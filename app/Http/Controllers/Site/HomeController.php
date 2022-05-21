<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return "controller";

        $services = Service::all();

        return view('site.home', compact('services'));
    } // end of index


    public function projects()
    {

        return view('site.projects');

    } // end of projects

    public function about()
    {

        return view('site.about');

    } // end of about



} //end of controller
