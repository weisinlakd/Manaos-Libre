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
    public function listado(Request $req) {

        $busqueda = $req->input('buscar');
        // dd($busqueda);
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

    public function recientes() {
        $productos = Producto::where('estado' ,'=', 1)->get();
        // dd($productos->count());
        $total = $productos->count();
        
        $productos = Producto::where('estado' ,'=', 1)->limit(32)
            ->orderBy('id', 'desc')
            ->paginate(12);
            
        // dd($producto);
        return view('productos', compact('productos', 'total'));
    }


    public function addToCart($id){
        $producto = Producto::find($id);
 
        if(!$producto) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $producto->name,                        
                        "precio" => $producto->precio,
                        "quantity" => 1,
                        "vendedor" => $producto->usuario,
                        "is_usado" => $producto->is_usado,

                        "foto" => "storage/".$producto->fotos[0]->nombre,

                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $producto->name,                        
            "precio" => $producto->precio,
            "quantity" => 1,
            "vendedor" => $producto->usuario,
            "is_usado" => $producto->is_usado,
            
            // "foto" => $producto->fotos

        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
