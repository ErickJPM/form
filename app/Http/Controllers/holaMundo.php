<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class holaMundo extends Controller
{
    public function mostrar()
    {
        return view('holamundo');
    }
}