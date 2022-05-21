<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Store;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index() {

        $services = Service::all();

        return view('site.services' , compact('services'));
    }

    public function show($slug) {

        $slug = str_replace('_', ' ', $slug);

        $service = Service::where('slug', $slug)->firstOrFail();

        // return $service;

        return view('site.inner_service', compact('service'));

    }

} // end of controller
