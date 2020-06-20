<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class formulario extends Controller
{
    public function form()
    {
        return view('formulario');
    }
}