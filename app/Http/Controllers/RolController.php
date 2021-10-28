<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //Listado de Rol
    public function listaRol(){
        $datarol['roles'] = Rol::paginate(15);

        return view('roles.listadoRol', $datarol);
    }

    //Eliminar Rol
    public function deleterol($id){
        Rol::destroy($id);

        return back()->with('rolEliminado', 'Rol Eliminado');
    }
}
