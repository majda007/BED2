<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knjiga05;
class KnjigaController extends Controller
{
    public function index()
    {
        $knjige05s=Knjiga05::all();
        return view("knjiga.index", compact("knjige05s"));
    }

    public function create()
    {
          return view('knjiga.create');
    }

    public function store(Request $request)
    {
        $request->validate([

        'naslov'=>'required',
        'autor'=>'required',
        'izdavac'=>'required'

        ]);

        Knjiga05::create($request->all());
        return redirect()->route('knjiga.index')->with('Jeeee', 'Knjiga je dodana');
    }
}
