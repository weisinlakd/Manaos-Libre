<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ciudad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    //

    public function actualizar (Request $req) {

        
        $req->validate([
            'name' => ['required', 'string','min:5', 'max:255'],
            'apellido' => ['string', 'min:5', 'max:255'],
            'telefono' => ['numeric', 'digits_between:7,12', 'starts_with:3,15,4,03,54'],
            'email' => ['string', 'email', 'max:255', 'unique:usuarios'],
            'ciudad' => ['numeric'],
            'direccion' => ['nullable','string', 'min:8' , 'max:255'],
            'password' => ['nullable','string', 'min:6', 'confirmed'],
            'avatar' =>['file', 'image']
        ], ['min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
            'image' => 'El campo :attribute debe ser una imagen',
            'unique' => 'Ya existe un :attribute con ese valor!',
            'confirmed' => 'La contraseña debe coincidir!',
            'numeric'=> 'El campo :attribute debe tener valor numérico!',
            'string' => 'El campo :attribute debe ser alfabético',
            'starts_with' => 'El campo :attribute debe empezar con una característica válida',
            'digits_between' => 'El campo :attribute debe tener entre :min y :max caracteres']
        );

        // dd($req);

        $usuario = User::find(Auth::user()->id);

        // dd($usuario);

        if (isset($req['avatar'])){
            
            
            try {
                $fotoASubir = $req['avatar'];
                # code...
                $ruta = $fotoASubir->store('public/profile');
                $nombreArchivo = basename($ruta);
                $foto = $nombreArchivo;
                // dd($foto);

                $usuario->foto = $foto;
            } catch (\Throwable $err) {
                //throw $th;
                throw $err;
                // abort(500);
                // return redirect()->back();
            }
        }

        if ($req['password'] != null) {

            $usuario->password = Hash::make($req['password']);
            
        } 

        $usuario->name = $req['name'];

        if (isset($req['apellido'])) {
            $usuario->apellido = $req['apellido'];
        }

        if (isset($req['telefono'])) {
            $usuario->telefono = $req['telefono'];
        }

        // dd($usuario);

        try {
        
            $usuario->save();

        } catch (\Throwable $th) {

            throw $th;
        }
        
        return redirect()->action('CiudadesController@listado');
        // return view('perfil');

    }

    public function perfil ($id) {

        $usuario = User::find($id);

        if ($usuario == null) {
            $usuario == false;
            return view('perfilAjeno', compact('usuario'));
        }

        return view ('perfilAjeno', compact('usuario'));
    }

}
