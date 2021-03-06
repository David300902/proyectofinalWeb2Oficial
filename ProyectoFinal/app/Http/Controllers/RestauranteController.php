<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function getRestauranteByID($id){
        return Restaurante::where(["id" => $id])->first();
    }
}
