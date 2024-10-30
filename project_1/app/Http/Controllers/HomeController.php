<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data = ['title' => "Home Page", 'content'=> "Hello BD"];
        $data['fruits'] = ["Mango", "Orange", "Apple"];
        return view('home', $data);
    }

    
    function about(){
        return view('about');
    }

    
    function contact(){
        return view('contact');
    }
}
