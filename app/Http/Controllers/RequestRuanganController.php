<?php

namespace App\Http\Controllers;

use App\Models\RequestRuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RequestRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestruangan = RequestRuangan::orderBy('id','DESC')->paginate(10);
        return view('pages.requestruangan.main', compact('requestruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.requestruangan.input', ['data' => new RequestRuangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'room' => 'required',
            'date_of_use' => 'required',
            'time_end' => 'required',
            'description' => 'required',
        ]);
        $requestruangan = new RequestRuangan;
        $requestruangan->room = $request->room;
        $requestruangan->user_id = Auth::User()->id;
        $requestruangan->date_of_use = $request->date_of_use;
        $requestruangan->time_end = $request->time_end;
        $requestruangan->description = $request->description;
        $requestruangan->save();
        return redirect('requestruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function show(RequestRuangan $requestruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestRuangan $requestruangan)
    {
        return view('pages.requestruangan.input', ['data' => $requestruangan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestRuangan $requestruangan)
    {
        $request->validate([
            'room' => 'required',
            'date_of_use' => 'required',
            'time_end' => 'required',
            'description' => 'required',
        ]);

        $requestruangan->room = $request->room;
        $requestruangan->user_id = Auth::User()->id;
        $requestruangan->date_of_use = $request->date_of_use;
        $requestruangan->time_end = $request->time_end;
        $requestruangan->description = $request->description;


        $requestruangan->update();
        return redirect('requestruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestRuangan  $requestRuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestRuangan $requestruangan)
    {
        $requestruangan->delete();
        return redirect('requestruangan');
    }
}
