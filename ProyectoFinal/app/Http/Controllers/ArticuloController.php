<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function getByCriticoId($id){
        return ["articulos" => Articulo::where(["criticoId" => $id])];
    }

    public function getArticulos(){
        return Articulo::all();
    }

    public function getArticulosByCriticoID($id){
        return Articulo::where(['criticoId' => intval($id)])->get();
    }
}
