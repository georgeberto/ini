<?php

namespace App\Http\Controllers;
use App\Models\about;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('about', ["about" => About::data()]);
    }

}
