<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function contactenos(){
    	return view('contactenos');
    }

    public function reviews(){
    	return view('reviews');
    }
}
