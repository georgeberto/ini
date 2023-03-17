<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', ['blogs' => blog::all()]);
    }

    public function show($slug)
    {
        return view('blog', ['blogs' => blog::find($slug)]);
    }
}
