<?php
  
namespace App\Http\Controllers;

use App\Models\Annoucement;
use Illuminate\Http\Request;
  
class DashboardController extends Controller
{
    public function index()
    {
        $annoucements = Annoucement::orderBy('id')->paginate(10);
        return view('pages.dashboard.main')->with('annoucements', $annoucements);
    }
}
