<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('welcome', compact('videos'));
    }
    public function home()
    {
        return view('home');
    }
}
