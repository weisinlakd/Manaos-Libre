<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    //

    public function actualizar () {

        return view('perfil');
    }

    public function perfil ($id) {

        $usuario = User::find($id);

        

        return view ('perfilAjeno', compact('usuario'));
    }

}
