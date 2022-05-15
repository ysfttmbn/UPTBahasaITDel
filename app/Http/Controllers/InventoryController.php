<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventory::all();
        return view('pages.inventory.main', ['inventories' => $inventory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.inventory.input', ['data' => new Inventory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'images' => 'required',
        ]);

        $file = $request->file('images');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $inventory = new Inventory;
        $inventory->name = $request->name;
        $inventory->images = $namaFile;
        
        $inventory->save();
        return redirect('inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        // return view('pages.inventory.input', ['data' => $inventory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        // return view('pages.inventory.input', ['data' => $inventory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => 'required',
            'images' => 'required',
        ]);

        $file = $request->file('images');
        $namaFile =$file->getClientOriginalName();
        $tujuanFile = 'file';
        $file->move($tujuanFile,$namaFile);

        $inventory->name = $request->name;
        $inventory->images = $namaFile;
        $inventory->description = $request->description;
        
        $inventory->update();
        return redirect('inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect('inventory');
    }
}
