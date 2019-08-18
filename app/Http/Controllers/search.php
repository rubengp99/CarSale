<?php

namespace CarSale\Http\Controllers;

use Illuminate\Http\Request;

class search extends Controller
{
    public function create() {
        return view('search');
    }

    public function find($filter){
        return view('filter',compact('filter'));
    }
}
