<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "welcome to Programming language";
        return view('pages.index', compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['web design', 'programming', 'seo']
        );
        return view('pages.services')->with($data);
    }
}
