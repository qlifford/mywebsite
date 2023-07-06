<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Welcome to my website';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
        public function service()
    {
        $data = array(
            'title' => 'Our Services',
            'services' => ['service1', 'service2', 'service3', 'service4', 'service5'],
            
        );
        return view('pages.service')->with($data);
    }
}
