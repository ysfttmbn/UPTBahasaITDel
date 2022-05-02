<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnnoucementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annoucements = Annoucement::orderBy('id')->paginate(10);
        return view('pages.dashboard.main')->with('annoucements', $annoucements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.annoucements.input', ['data' => new Annoucement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnoucementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
            'description' => 'required',
            'date_of_use' => 'required',
            'date_of_end' => 'required',
        ]);

        $file = $request->file('file');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $annoucement = new Annoucement;
        $annoucement->id_user = Auth::User()->id;
        $annoucement->title = $request->title;
        $annoucement->file = $namaFile;
        $annoucement->description = $request->description;
        $annoucement->date_of_use = $request->date_of_use;
        $annoucement->date_of_end = $request->date_of_end;

        $annoucement->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annoucement  $annoucement
     * @return \Illuminate\Http\Response
     */
    public function show(Annoucement $annoucement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annoucement  $annoucement
     * @return \Illuminate\Http\Response
     */
    public function edit(Annoucement $annoucement)
    {
        return view('pages.annoucements.input', ['data' => $annoucement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnoucementRequest  $request
     * @param  \App\Models\Annoucement  $annoucement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annoucement $annoucement)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
            'description' => 'required',
            'date_of_use' => 'required',
            'date_of_end' => 'required',
        ]);

        $file = $request->file('file');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $annoucement->id_user = Auth::User()->id;
        $annoucement->title = $request->title;
        $annoucement->file = $namaFile;
        $annoucement->description = $request->description;
        $annoucement->date_of_use = $request->date_of_use;
        $annoucement->date_of_end = $request->date_of_end;

        $annoucement->update();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annoucement  $annoucement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annoucement $annoucement)
    {
        $annoucement->delete();
        return redirect('dashboard');
    }
}
