<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'webler.cafe';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    // not working:
    public function services($data){
        $data = array(
            'title' => 'Services',
            'services' => ['WebDesign', 'Programming', 'Marketing']
        );
        // return view('pages.index', compact('title'));
        return view('pages.services', $data);
    }
    public function backend(){
        $title = 'Choose a theme: ';
        return view('pages.backend', compact('title'));
    }
    public function frontend(){
         $title = 'Choose a theme: ';
        return view('pages.frontend')->with('title', $title);
    }
    public function design(){
         $title = 'Choose a theme: ';
        return view('pages.design')->with('title', $title);
    }
}
