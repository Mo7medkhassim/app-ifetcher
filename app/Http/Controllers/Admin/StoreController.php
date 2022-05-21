<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        // $stores

        return view('admin.stores.index', compact('stores'));
    } // end of index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        $categories = Category::all();
        // return $categories;
        return view('admin.stores.create', compact('categories'));
    } // end of create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    return $request;
        $rules = [
            'category_id' => 'required',
            'service_id' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];


        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required'];
            $rules += [$locale . '.desc' => 'required'];
            $rules += [$locale . '.place' => 'required'];
        }

        $message = [
            'ar.name.required' => 'Arabic name is required',
        ];

        $request->validate($rules, $message);

        $request_data = $request->except(['_token', '_method', 'image', 'logo']);

        $request_data['slug'] = $request->en['name'];

        if ($request->hasFile('image')) {

            Image::make($request->image)->resize(700, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/stores/') . $request->image->hashName());

            $request_data['image'] = $request->image->hashName();
        }

        if ($request->hasFile('logo')) {

            Image::make($request->logo)->resize(250, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/stores/') . $request->logo->hashName());

            $request_data['logo'] = $request->logo->hashName();
        }


        Store::create($request_data);

        session()->flash('success', __('Store has been added successfully'));

        return redirect()->route('admin.stores.index');
    } // end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        $categories = Category::all();

        return view('admin.stores.edit', compact('categories', 'store'));
    }  // end of edit
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $rules = [
            'category_id' => 'required',
            'service_id' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];

        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.name' => 'required'];
            $rules += [$locale . '.desc' => 'required'];
            $rules += [$locale . '.place' => 'required'];
        }

        $message = [
            'ar.name.required' => 'Arabic name is required',
        ];


        $request->validate($rules, $message);

        $request_data = $request->except(['_token', '_method']);

        $request_data['slug'] = $request->en['name'];

        if ($request->image || $request->logo) {

            if ($request->hasFile('image')) {

                Image::make($request->image)->resize(700, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/stores/') . $request->image->hashName());

                $request_data['image'] = $request->image->hashName();
            }

            if ($request->hasFile('logo')) {

                Image::make($request->logo)->resize(250, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/stores/') . $request->logo->hashName());

                $request_data['logo'] = $request->logo->hashName();
            }

            // $store->update($request_data);
        }

        $store->update($request_data);

        session()->flash('success', __('Store edit successfully'));

        return redirect()->route('admin.stores.index');
    } // end of update

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();

        session()->flash('success', __('Record Delete successfully'));

        return redirect()->route('admin.stores.index');
    }
}
