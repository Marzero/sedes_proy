<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuaderno_medico;
use App\Paciente;
class CuadernosMedicosController extends Controller
{
    public function indice_cuaderno_medico($id)
    {
        $registros=Cuaderno_medico::where('user_id',auth()->user()->id)->get();
        //dd($registros);
        return view('pages.medico.cuadernos.indice_cuaderno_medico',compact('registros'));
    }

    public function nuevo_registro_cuaderno_medico()
    {
        $pacientes=Paciente::all();
        return view('pages.medico.cuadernos.nuevo_registro_cuaderno_medico',compact('pacientes'));
    }

    public function guardar_registro(Request $request)
    {
        //$anio=date('Y');
        
        $paciente=Paciente::find($request->paciente_id);
        $nac=$paciente->perfil->fecha_nacimiento;
        list($ano,$mes,$dia) = explode("-",$nac);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        //dd($ano_diferencia);
            //dd($paciente->perfil->estado_civil);
        $r=new Cuaderno_medico;
        $r->user_id=Auth()->user()->id;
        $r->fecha=date('d-m-Y');
        $r->nombre=$paciente->perfil->nombres.' '.$paciente->perfil->apellido_paterno.' '.$paciente->perfil->apellido_materno;
        $r->estado_civil=$paciente->estado_civil;
        $r->ocupacion=$paciente->perfil->ocupacion;
        $r->edad=$ano_diferencia;
        //dd($r);
        $r->save();
        flash('Termine de registrar los datos','success');
        return redirect()->route('cuaderno_ver_registro',$r->id);
    }

    public function cuaderno_ver_registro($id)
    {
        $r=Cuaderno_medico::find($id);
        return view('pages.medico.cuadernos.ver_registro',compact('r'));
    }

    public function actualizar_registro(Request $request)
    {
        //dd($request);
        $r=Cuaderno_medico::find($request->registro_id);
        $r->diagnostico=$request->diagnostico;
        $r->nro_ficha=$request->nro_ficha;
        $r->save();
        flash('registro guardado','success');
        return redirect()->route('indice_cuaderno_medico',auth()->user()->id);
    }

    
}
