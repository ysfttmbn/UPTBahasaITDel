<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\RequestInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RequestInventoryController extends Controller
{   
    public function index()
    {
        $requestinventory = RequestInventory::where('user_id', Auth::user()->id);
        return view('pages.requestinventory.main', compact('requestinventory'));
    }

    public function create()
    {
        $data = Inventory::all();
        return view('pages.requestinventory.input', ['data' => new RequestInventory, 'inventories'=>$data]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'inventory' => 'required',
            'date_of_use' => 'required',
            'date_of_end' => 'required',
            'description' => 'required',
        ]);

        $requestinventory = new RequestInventory;
        $requestinventory->inventory_id = $request->inventory;
        $requestinventory->user_id = Auth::User()->id;
        $requestinventory->date_of_use = $request->date_of_use;
        $requestinventory->time_end = $request->date_of_end;
        $requestinventory->description = $request->description;

        $requestinventory->save();
        return redirect('requestinventory');
    }

    public function show(RequestInventory $requestInventory)
    {
        //
    }

    public function edit(RequestInventory $requestinventory)
    {
        $data = Inventory::all();
        return view('pages.requestinventory.input', ['data' => $requestinventory, 'inventories'=>$data]);
    }

    public function verification(Request $request, RequestInventory $requestinventory)
    {
        $requestinventory->status = $request->status;
        $requestinventory->update();
        return redirect('requestinventory');
    }
    public function update(Request $request, RequestInventory $requestinventory)
    {
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
        $requestinventory->id_user = Auth::User()->id;
        $requestinventory->books = $request->books;
        $requestinventory->date_of_use = $request->date_of_use;
        $requestinventory->payback_time = $request->payback_time;
        $requestinventory->description = $request->description;

        $requestinventory->update();
        return redirect('requestinventory');
    }

    public function destroy(RequestInventory $requestinventory)
    {
        $requestinventory->delete();
        return redirect('requestinventory');
    }
}
