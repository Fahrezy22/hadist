<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailHadistController extends Controller
{
    public function index($id)
    {
        return view('Hadist.Detail_hadist');
    }
}
