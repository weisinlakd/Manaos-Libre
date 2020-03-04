<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Categoria;
use App\User;

class SitioController extends Controller
{
    //
    public function filtro () {

        $ciudades = Ciudad::all();
        $categorias = Categoria::all();
        $usuarios = User::all();

        return view('avanzada', compact('ciudades','categorias', 'usuarios'));
    }
}
