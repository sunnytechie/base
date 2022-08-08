<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return Inertia::render('Settings/Index', [
            'categories' => $categories,
        ]);
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
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'type' => 'required|max:255',
            'icon' => 'required|max:255',
        ]);

        //store in the database
        $category = new Category;
        $category->user_id = auth()->user()->id;
        $category->title = $request->input('title');
        $category->type = $request->input('type');
        $category->icon = $request->input('icon');
        $category->save();
        
        return redirect('/settings')->with('success', 'Category Created Successfully');
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
        $categories = Category::orderBy('id', 'desc')->get();

        //declare the category
        $category = Category::find($id);
        $id = $category->id;
        $title = $category->title;
        $type = $category->type;
        $icon = $category->icon;
        $created_at = $category->created_at;

        //return the view with the category data
        return Inertia::render('Settings/Edit', [
            'id' => $id,
            'title' => $title,
            'type' => $type,
            'icon' => $icon,
            'created_at' => $created_at,
            'categories' => $categories,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update the category
        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->type = $request->input('type');
        $category->icon = $request->input('icon');
        $category->save();

        //redirect back to the settings page with a success message
        return back()->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/settings')->with('success', 'Category Deleted Successfully');
    }
}
