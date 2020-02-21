<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Producto;
use App\FotoProducto;
use App\Ciudad;
use App\Categoria;
use App\Valoracion;

class ProductosController extends Controller
{
    //
    public function listado(string $busqueda = null) {

        if (!$busqueda){

            $productos = Producto::where('estado' ,'=', 1);
            
            $total = $productos->count();
            $productos = $productos->paginate(8);
            // dd($productos);
            foreach ($productos as $producto) {
                if ($producto->valoraciones) {
                    
                    $valoracion = Valoracion::where('id_producto' ,'=' ,$producto->id)->get();
                    // dd($valoracion);
                    
                    $producto->valoracion = $valoracion->avg('valoracion');
                    
                    // dd($producto);
                    $producto->save();
                }
            }
        } else {
            $productos = Producto::where('name' ,'LIKE', "%$busqueda%");
            
            $total = $productos->count();
            $productos = $productos->paginate(8);
        }

        return view('productos', compact('productos', 'total', 'busqueda'));
    }

    public function detalle($id) {
        $producto = Producto::find($id);
        // dd($producto);
        // $fotos = FotoProducto::where('id_producto', '=', $id)->get();
        if ($producto->valoraciones) {

            $valoracion = Valoracion::where('id_producto' ,'=' ,$id)->get();
            // dd($valoracion);
            
            $producto->valoracion = $valoracion->avg('valoracion');
            $producto->save();
        }
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
            "fotos.*" => "required|image",
            "fotos" => "|min:3|max:3",
            "descripcion" => 'required'
        ];

        $messages = [
            "string" => "El campo :attribute debe contener texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "numeric" => "El campo :attribute debe ser un numero",
            "size" => "El campo :attribute debe tener :size ",
            "required" => "El campo :attribute es obligatorio",
            "mimes" => "el formato de :attribute debe ser :mimes ",
            "max" => "El campo :attribute tiene un máximo de :max"
        ];

        $this->validate($req, $rules, $messages);
        
        

        $prodNuevo = new Producto();

        $prodNuevo->id_usuario = 1; //CAMBIAR LUEGO DE HACER USUARIOS
        $prodNuevo->name = $req["name"];
        $prodNuevo->ciudad_id = $req["ciudad_id"]; 
        $prodNuevo->categoria_id = $req["categoria_id"]; 
        $prodNuevo->descripcion = $req["descripcion"];

        if (isset($req["is_usado"])) {

            $prodNuevo->is_usado = 1;
            $prodNuevo->meses_uso = $req["meses_uso"];
            $prodNuevo->estado_uso = $req["estado_uso"];
            
        }

        $prodNuevo->precio = $req['precio'];
        $prodNuevo->save();
        
        $fotos = $req->file('fotos');
        foreach ($fotos as $foto) {
            # code...
            $ruta = $foto->store('public');
            $nombreArchivo = basename($ruta);
            
            $fotoDB = new FotoProducto();

            $fotoDB->nombre = $nombreArchivo;
            $fotoDB->path = $ruta;
            $fotoDB->id_producto = $prodNuevo->id;

            $fotoDB->save();

        }

        

        return redirect('/productos');
    }


    public function borrar(Request $req) {

        $id = $req['id'];

        $producto = Producto::find($id);

        $producto->estado = 0;

        $producto->save();

        return redirect('/productos');
    }

    public function nuevoProducto (){

        $categorias = Categoria::where('estado', '=', 1)->orderBy('name')->get();

        $ciudades = Ciudad::all()->sortBy('nombre');

        return view('crearPublicacion', compact('categorias', 'ciudades'));

    }

    public function home() {

        $masBaratos =  Producto::where('estado' ,'=', 1)
        ->orderBy('precio')
        ->paginate(12);

        $masVotados = Producto::where('estado' ,'=', 1)
        ->orderBy('valoracion', 'desc')
        ->paginate(12);

        // dd($masVotados);

        return view('homeML', compact('masBaratos', 'masVotados'));
    }
}
