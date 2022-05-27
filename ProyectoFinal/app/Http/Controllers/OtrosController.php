<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosController extends Controller
{
    public function getInicio(){
        return view('Otros.inicio');
    }
}
