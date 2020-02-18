<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Producto;

class ProductosController extends Controller
{
    //
    public function listado() {
        $productos = Producto::paginate(8);

        return view('test', compact('productos'));
    }

    public function detalle($id) {
        $producto = Producto::find($id);
        // dd($producto);
        return view('detalleProducto', compact('producto'));
    }

    public function baratos() {
        $productos = Producto::where('estado' ,'=', 1)
            ->orderBy('precio')
            ->paginate(12);
        // dd($producto);
        return view('test', compact('productos'));
    }

    public function crear(Request $req){

        $prodNuevo = new Producto();

        $prodNuevo->id_usuario = 1; //CAMBIAR LUEGO DE HACER USUARIOS
        $prodNuevo->name = $req["name"];
        $prodNuevo->ciudad_id = 1; //CAMBIAR LUEGO DE CREAR CIUDAD
        $prodNuevo->categoria_id = 1; //CAMBIAR LUEGO DE CREAR CATEGORIAS
        $prodNuevo->descripcion = $req["descripcion"];

        if (isset($req["is_usado"])) {

            $prodNuevo->is_usado = 1;
            $prodNuevo->meses_uso = $req["meses_uso"];
            $prodNuevo->estado_uso = $req["estado_uso"];
            
        }

        $prodNuevo->precio = $req['precio'];
        $prodNuevo->save();
        
        return redirect('/productos');
    }
}
