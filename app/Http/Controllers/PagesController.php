<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function About(){
        return view('about');
    }
    public function Process(){
        return view('process');
    }
}