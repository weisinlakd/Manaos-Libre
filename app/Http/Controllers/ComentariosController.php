<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use Exception;
use Illuminate\Support\Facades\Auth;

class ComentariosController extends Controller
{
    //

    public function crear(Request $req) {
        
        // dd($req);
        $comentarioNew = new Comentario;

        $comentarioNew->id_usuario = Auth::user()->id;
        $comentarioNew->id_producto = $req['id'];
        $comentarioNew->comentario = $req["comentario"];

        try {
            $comentarioNew->save();
        } catch (Exception $e){
            return $e;
        }

        return redirect()->back()->with('success', 'Comentario agregado!');
    }
}
