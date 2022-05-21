<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\ReqCategory;
use App\Http\Requests\Category\ReqCatUpdate;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {

    // }

    public function index()
    {

        $categories = Category::paginate(5);

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReqCategory $request)
    {
        // return storage_path('app/public');

        $data = $request->except(['_token', '_method', 'image']);

        $data['slug'] = $request->en['name'];

        if ($request->image) {

            Image::make($request->image)->resize(500, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/category/') . $request->image->hashName());

            $data['image'] = $request->image->hashName();
        }

        Category::create($data);

        session()->flash('success', __('added successfully'));
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReqCatUpdate $request, Category $category)
    {
        // return $request;
        $data = $request->except(['_token', '_method', 'image']);

        $data['slug'] = $request->en['name'];

        if ($request->hasFile('newimage')) {
            Image::make($request->newimage)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/category/') . $request->newimage->hashName());

            $data['image'] = $request->newimage->hashName();
        }

        $category->update($data);

        session()->flash('success', __('edited successfully'));
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category->delete();

        session()->flash('success', __('deleted successfully'));

        return redirect()->route('admin.categories.index');
    }
}
