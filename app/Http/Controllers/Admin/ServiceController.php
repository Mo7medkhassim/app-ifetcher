<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', compact('services'));
    } //end of index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // return $categories;
        return view('admin.services.create');
    } // end of create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required'];
            $rules += [$locale . '.desc' => 'required'];
        }

        $request->validate($rules);

        $request_data = $request->all();
        $request_data['slug'] = $request->en['name'];

        if ($request->hasFile('image')) {
                Image::make($request->image)->resize(700, 450, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/services/') . $request->image->hashName());

                $request_data['image'] =$request->image->hashName();


        }

        Service::create($request_data);

        session()->flash('success', __('added successfully'));
        return redirect()->route('admin.services.index');
    }  // end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    } // end of show

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {

        // return $service;

        return view('admin.services.edit', compact('service'));
    }  // end of edit

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required'];
            $rules += [$locale . '.desc' => 'required'];
        }

        $request->validate($rules);

        $request_data = $request->except(['_token', '_method']);

        $request_data['slug'] = $request->en['name'];




            // Storage::disk('public')->delete('/services/' . $service->image);


        if ($request->hasFile('image')) {
                // Storage::deleteDirectory('/services/'.$service->image);
                Image::make($request->image)->resize(700, 450, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/services/') . $request->image->hashName());

                $request_data['image'] = $request->image->hashName();
        }

        $service->update($request_data);

        session()->flash('success', __('edit successfully'));

        return redirect()->route('admin.services.index');
    } // end of update

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        session()->flash('success', __('deleted successfully'));

        return redirect()->route('admin.services.index');
    } // end of destroy
} // end of controller
