<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function background(){
		return view('pages.home.background');
	}

	public function staff(){
		return view('pages.home.staff');
	}

}