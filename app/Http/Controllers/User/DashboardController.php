<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Hadist.Dashboard');
    }
    public function list()
    {
        return view('Hadist.List_hadist');
    }
}
