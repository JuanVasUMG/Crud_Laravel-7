<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Formulario de Usuario
    public function userform(){
        return view('usuarios.userform');
    }

    //Guardar Usuarios
    public function save(Request $request){
        $userdata = request()->all();

        return response()->json($userdata);
    }
}
