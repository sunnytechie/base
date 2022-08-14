<?php

namespace App\Http\Controllers;

use App\Models\Base;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $base = Base::with('category')->OrderBy('id', 'desc')->get();
        return Inertia::render('Base/Index', [
            'base' => $base,
        ]);
    }

    public function selectIndex($id)
    {
        $base = Base::with('category')->where('category_id', $id)->OrderBy('id', 'desc')->get();
        return Inertia::render('Base/Select', [
            'base' => $base,
        ]);
    }
}
