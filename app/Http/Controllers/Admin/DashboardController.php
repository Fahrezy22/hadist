<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hadist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'shahih' => Hadist::where('type', 'Shahih')->count(),
            'total' => Hadist::count(),
            'hasan' => Hadist::where('type', 'Hasan')->count(),
            'dhaif' => Hadist::where('type', 'Dhaif')->count(),
        ];
        return view('Admin.Dashboard')->with('data', $data);
    }
}
