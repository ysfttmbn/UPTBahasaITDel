<?php
  
namespace App\Http\Controllers;

use App\Models\Annoucement;
use Illuminate\Http\Request;
  
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $annoucements = Annoucement::orderBy('id','DESC')->when($search, function ($query, $search){
            return $query->where('title','like',"%{$search}%");
        })->paginate(5);

        return view('pages.dashboard.main')->with('annoucements', $annoucements);
        
        // $annoucements = Annoucement::orderBy('id','DESC')->paginate(10);
        // return view('pages.dashboard.main')->with('annoucements', $annoucements);
    }
}
