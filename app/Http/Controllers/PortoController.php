<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function home()
    {
        return view('dinamic_template.home', [
            'title' => 'Home'
        ]);
    }
    public function about()
    {
        return view('dinamic_template.about', [
            'title' => 'About'
        ]);
    }
    public function blogs()
    {
        return view('dinamic_template.blogs', [
            'title' => 'Blogs'
        ]);
    }
}
