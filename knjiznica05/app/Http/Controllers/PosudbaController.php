<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posudba;
class PosudbaController extends Controller
{
    public function index()
    {
        $posudbe05s=Posudba::all();
        return view("posudba.index", compact("posudbe05s"));
    }

    public function create()
    {
          return view('posudba.create', compact('posudba05s'));
    }
   
  
}
