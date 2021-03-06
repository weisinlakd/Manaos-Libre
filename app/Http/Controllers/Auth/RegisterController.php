<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'avatar' =>['file', 'image']
        ], ['min' => 'El campo :attribute debe tener :min caracteres como mínimo.',
            'image' => 'El campo :attribute debe ser una imagen',
            'unique' => 'Ya existe un :attribute con ese valor!',
            'confirmed' => 'La contraseña debe coincidir!']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        if (isset($data['avatar'])){
            
            
            try {
                $fotoASubir = $data['avatar'];
                # code...
                $ruta = $fotoASubir->store('public/profile');
                $nombreArchivo = basename($ruta);
                $foto = $nombreArchivo;
                // dd($foto);

            
            } catch (\Throwable $err) {
                //throw $th;
                throw $err;
                // abort(500);
                // return redirect()->back();
            }
        } else $foto = 'error';
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'foto' => $foto,
        ]);
    }
}
