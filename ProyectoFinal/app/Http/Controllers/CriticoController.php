<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critico;

class CriticoController extends Controller
{
    public function getListCritico(){
        return view('Critico.list');
    }

    public function getCrticoById($id){
        return Critico::where(["id" => $id])->first();
    }

    public function getCriticos(){
        return  Critico::all();
    }

    public function getCriticoInfoView(){
        return view('Critico.info');
    }

    public function getPerfiles(){
        return view('Critico.perfiles');
    }
}
