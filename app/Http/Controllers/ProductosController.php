<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Producto;
use App\FotoProducto;

class ProductosController extends Controller
{
    //
    public function listado() {
        $productos = Producto::where('estado' ,'=', 1)->paginate(8);

        return view('test', compact('productos'));
    }

    public function detalle($id) {
        $producto = Producto::find($id);
        // dd($producto);
        // $fotos = FotoProducto::where('id_producto', '=', $id)->get();

        // dd($foto);
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

        $rules = [

            "name" => "string|min:5",
            "precio" => "numeric|min:10",
            "fotos" => "file"
        ];

        $messages = [
            "string" => "El campo :attribute debe contener texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "numeric" => "El campo :attribute debe ser un numero",
            "size" => "El campo :attribute debe tener :size ",
            "file" => "El campo :attribute debe ser un archivo"
        ];

        $this->validate($req, $rules, $messages);
        
        

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
        
        
        $ruta = $req->file('fotos')->store('public');
        $nombreArchivo = basename($ruta);

        $foto = new FotoProducto();

        $foto->nombre = $nombreArchivo;
        $foto->path = $ruta;
        $foto->id_producto = $prodNuevo->id;

        $foto->save();

        return redirect('/productos');
    }


    public function borrar(Request $req) {

        $id = $req['id'];

        $producto = Producto::find($id);

        $producto->estado = 0;

        $producto->save();

        return redirect('/productos');
    }
}
