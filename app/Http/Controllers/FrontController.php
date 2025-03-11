<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class FrontController extends Controller
{
    //
      public function index()
    {
        return view('front.index',[
            'teams' => Team::all()
        ]);
    }
    public function subservices()
    {
        return view('front.subservices');
    }
}



