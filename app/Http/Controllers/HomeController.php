<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Base/Index');
    }

    public function selectIndex($id)
    {
        return Inertia::render('Base/New');
    }
}
