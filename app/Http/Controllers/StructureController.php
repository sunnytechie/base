<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class StructureController extends Controller
{

    public function select()
    {
        return Inertia::render('Structure/Select');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //get request data
        //$data = $request->all();
        //get list of categories
        $categories = Category::all();

        if ($request->password == 'true') {
            $password = "true";
        }else {
            $password = "";
        }

        if ($request->bank == 'true') {
            $bank = "true";
        }else {
            $bank = "";
        }

        if ($request->event == 'true') {
            $event = "true";
        }else {
            $event = "";
        }

        if ($request->projects == 'true') {
            $projects = "true";
        }else {
            $projects = "";
        }

        if ($request->land == 'true') {
            $land = "true";
        }else {
            $land = "";
        }

        if ($request->image == 'true') {
            $image = "true";
        }else {
            $image = "";
        }

        return Inertia::render('Structure/Index', [
            'password' => $password,
            'bank' => $bank,
            'event' => $event,
            'projects' => $projects,
            'land' => $land,
            'image' => $image,
            'categories' => $categories,
        ]);
    }
}
