<?php

namespace App\Http\Controllers;

use App\Models\RequestRuangan;
use Illuminate\Http\Request;

class RequestRuanganController extends Controller
{
    public function requestruangan(){
		return view('pages.requestruangan.requestruangan');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function show(RequestRuangan $requestRuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestRuangan $requestRuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestRuangan $requestRuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestRuangan $requestRuangan)
    {
        //
    }
}
