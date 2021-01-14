<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function mostrarEstablecimiento(){
        $data["EstablecimientoDatos"] = Establecimiento::getAll();
        return view("establecimiento", $data);
    }
}
