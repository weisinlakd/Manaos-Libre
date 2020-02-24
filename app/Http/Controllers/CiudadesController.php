<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadesController extends Controller
{
    //
    public function listado() {
        $ciudades = Ciudad::all();

        return view('perfil', compact('ciudades'));
    }
}
