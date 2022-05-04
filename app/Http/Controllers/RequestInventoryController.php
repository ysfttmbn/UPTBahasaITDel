<?php

namespace App\Http\Controllers;

use App\Models\RequestInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RequestInventoryController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.requestinventory.requestinventory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('pages.requestinventory.input', ['data' => new RequestInventory, 'users'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'books' => 'required',
            'date_of_use' => 'required',
            'payback_time' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('file');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $requestinventory = new RequestInventory;
        $requestinventory->id_user = Auth::User()->id;
        $requestinventory->books = $request->books;
        $requestinventory->date_of_use = $request->date_of_use;
        $requestinventory->payback_time = $request->payback_time;
        $requestinventory->description = $request->description;

        $requestinventory->save();
        return redirect('requestinventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestInventory  $requestInventory
     * @return \Illuminate\Http\Response
     */
    public function show(RequestInventory $requestInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestInventory  $requestInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestInventory $requestInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestInventory  $requestInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestInventory $requestInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestInventory  $requestInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestInventory $requestInventory)
    {
        //
    }
}
