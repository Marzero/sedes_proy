<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Perfil;
class UsuariosController extends Controller
{
    public function indice_usuarios()
    {
        $usuarios=User::all();
        return view('pages.admin.usuarios.indice_usuarios',compact('usuarios'));
    }

    public function cambiar_estado($id)
    {
        $u=User::find($id);
        if($u->estado=='activo'){
            $u->estado='inactivo';
        }else{
            $u->estado='activo';
        }
        $u->save();
        flash('Cambio realizado con exito','success');
        return redirect()->back();
    }

    public function nuevo_usuario()
    {
        return view('pages.admin.usuarios.nuevo_usuario');
    }
    public function guardar_usuario(Request $request)
    {
        $p=new Perfil($request->all());
        $p->save();
        $u=new User($request->all());
        $u->perfil_id=$p->id;
        $u->estado='activo';
        $u->password=bcrypt('Sedes2020');
        $u->save();
        flash('Usuario guardado correctamente','primary');
        return redirect()->route('indice_usuarios');
    }

    public function ver_usuario($id)
    {
        
        $u=User::find($id);
        if($u->HasPermissionTo('administrar usuarios')){
            $permisos=Permission::all();
            return view('pages.admin.usuarios.ver_usuario',compact('u','permisos'));
        }else{
            $error='No cuenta con los permisos necesarios para esta sección';
            return view('pages.error',compact('error'));
        }
        
        

    }
}
