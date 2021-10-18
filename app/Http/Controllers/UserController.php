<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Lisatdo de Usuarios
    public function lista(){
        $data['users'] = Usuario::paginate(3);

        return view('usuarios.listar', $data);
    }

    //Formulario de Usuario
    public function userform(){
        return view('usuarios.userform');
    }

    //Guardar Usuarios
    public function save(Request $request){

        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'email'=> 'required|string|max:255|email|unique:usuarios'
        ]);

        $userdata = request()->except('_token');
        Usuario::insert($userdata);

        return back()->with('usuarioGuardado','Usuario Guardado');
    }
}
