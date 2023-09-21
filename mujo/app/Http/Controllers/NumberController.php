<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    /*public function add($a,$b)
    {
        $sum=$a+$b;
        return view("sum", ["sum"=>$sum]);
    }*/

    public function add(Request $request)
    {
        $broj1=$request->input("broj1");
        $broj2=$request->input("broj2");

        $sum=$broj1+$broj2;

        return view("sum",["sum"=>$sum]); //sum.blade.php

    }
}
