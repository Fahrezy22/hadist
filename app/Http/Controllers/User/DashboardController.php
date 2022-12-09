<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hadist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Hadist::latest()->paginate(6);
        return view('Hadist.Dashboard')->with('data', $data);
    }

    public function search(Request $request)
    {
        $data = Hadist::where('theme','like',"%".$request->search."%")
		->paginate(9);

        return view('Hadist.List_hadist')->with('data', $data);
    }

    public function detail($id)
    {
        $data = Hadist::find($id);

        return view('Hadist.Detail_hadist')->with('data', $data);
    }
}
