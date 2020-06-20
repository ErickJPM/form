<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontrol extends Controller
{
    public function store(Request $request)
    {
        return view("vistas",$request);

    }
}
