<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function kelasbahasainggris(){
		return view('pages.layanan.kelasbahasainggris');
	}
    public function ujiantoefl(){
		return view('pages.layanan.ujiantoefl');
	}
}
