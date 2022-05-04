<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('pages.gallery.main', ['galleries' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gallery.input', ['data' => new Gallery]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'images' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('images');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->images = $namaFile;
        $gallery->description = $request->description;
        

        $gallery->save();
        return redirect('gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('pages.gallery.input', ['data' => $gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
            'images' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('images');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $gallery->title = $request->title;
        $gallery->images = $namaFile;
        $gallery->description = $request->description;
        
        $gallery->save();
        return redirect('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect('gallery');
    }
}
