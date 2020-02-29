<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valoracion;
use Exception;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class ValoracionesController extends Controller
{
    //
    public function votar(Request $req) {
        
        
        
        $valoracionNew = new Valoracion;

        
        
        
        $valoracionNew->id_usuario = Auth::user()->id;
        $valoracionNew->id_producto = $req['id_producto'];
        $valoracionNew->valoracion = $req["rating-$valoracionNew->id_producto-10000"]*2;

        // dd($valoracionNew);

        try {
            $valoracionNew->save();
        } catch (Exception $e){
            return $e;
        }

        return redirect()->back()->with('success', 'valoracion agregada!');
    }
}
