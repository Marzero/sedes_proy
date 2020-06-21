<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Paciente;
use App\Perfil;
use App\Chequeo;
class PacientesController extends Controller
{
    public function indice_pacientes()
    {
        $pacientes=Paciente::all();
        return view('pages.pacientes.indice_pacientes',compact('pacientes'));
    }

    public function nuevo_paciente()
    {
        return view('pages.pacientes.nuevo_paciente');
    }

    public function guardar_paciente(Request $request)
    {
        $perfil=new Perfil($request->all());
        //dd($perfil);
        $perfil->save();
        $paciente=new Paciente($request->all());;
        $paciente->perfil_id=$perfil->id;
        $paciente->save();
        flash('El paciente fue registrado correctamente','success');
        return redirect()->route('indice_pacientes');
    }

    public function editar_paciente($id)
    {
        $paciente=Paciente::find($id);
        return view('pages.pacientes.editar_paciente',compact('paciente'));
    }

    public function actualizar_paciente(Request $request)
    {
        $paciente=Paciente::find($request->paciente_id);
        $paciente->fill($request->all());
        $paciente->save();
        $perfil=Perfil::find($paciente->perfil->id);
        $perfil->fill($request->all());
        $perfil->save();
        flash('El paciente fue actualizado correctamente','warning');
        return redirect()->route('indice_pacientes');
    }

    public function ver_paciente($id)
    {
        $p=Paciente::find($id);
        $chequeos=Chequeo::where('paciente_id',$p->id)->get();
        return view('pages.pacientes.ver_paciente',compact('p','chequeos'));

    }

    public function nuevo_chequeo($id)
    {
        //dd('holis');
        $p=Paciente::find($id);
        return view('pages.pacientes.nuevo_chequeo',compact('p'));
    }
    
    public function guardar_chequeo(Request $request)
    {
        //dd($request);
        $chequeo=new Chequeo($request->all());
        $chequeo->user_id=auth()->user()->id;
        $chequeo->fecha=date('d-m-Y');
        $chequeo->save();
        flash('Chequeo guardado correctamente','success');
        return redirect()->route('ver_paciente',$chequeo->paciente_id);
    }

    public function ver_chequeo($id)
    {
        $c=Chequeo::find($id);
        $p=Paciente::find($c->paciente_id);
        return view('pages.pacientes.ver_chequeo',compact('p','c'));
    }

}
