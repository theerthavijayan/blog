<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function homePage(){
        $a=10;
		$b=20;
		$c=$a+$b;
		// return $c;
        $name='theertha';
		return view('welcome',compact('c','name'));
	}
    public function aboutUs(){
		return view('about');
	}
    public function contactUs(){
		return view('contact');
	}
}
