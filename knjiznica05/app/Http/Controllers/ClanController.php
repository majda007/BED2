<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan05;

class ClanController extends Controller
{
    public function index()
    {
        $clan05s=Clan05::all();
        return view("clan.index", compact("clan05s"));
    }

    public function create()
    {
          return view('clan.create');
    }

    public function store(Request $request)
    {
        $request->validate([

        'ime'=>'required',
        'prezime'=>'required'


        ]);

        Clan::create($request->all());
        return redirect()->route('clan05s.index')->with('Jeeee', 'Clan je dodan');
    }
}
