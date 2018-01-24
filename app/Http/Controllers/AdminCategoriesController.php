<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\AdminPostCategoryRequest;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id','desc')->get();
        $count = 0;
        return view('admin.categories.index', compact('categories', 'count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPostCategoryRequest $request)
    {
        //
        Category::create( $request->all());

        $request->session()->flash('category_created', 'Category has been created');
        return redirect()->route('category.index');
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
    public function edit($id)
    {
        //
        $categories = Category::orderBy('id','desc')->get();
        $category_id = Category::findOrFail($id);
        return view('admin.categories.edit', compact('categories', 'category_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPostCategoryRequest $request, $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->update($request->all());
        $request->session()->flash('category_updated', 'Category has been updated');
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Category::findOrFail($id)->delete();
        session()->flash('category_deleted', 'Category has been deleted');
        return redirect('/admin/category');
    }
}
