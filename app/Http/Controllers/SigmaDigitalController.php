<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigmaDigitalController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
}
