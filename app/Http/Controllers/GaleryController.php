<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function galery(){
		return view('pages.galery.galery');
	}
}