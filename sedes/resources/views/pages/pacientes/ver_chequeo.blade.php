@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Paciente: {{$p->perfil->nombres}}  {{$p->perfil->apellido_paterno}}  {{$p->perfil->apellido_materno}}</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_pacientes')}}" class="btn btn-primary">
            Volver al indice de pacientes
        </a>

        <a href="{{route('ver_paciente',$p->id)}}" class="btn btn-primary">
            < Volver a la vista de paciente
        </a>

        <table class="table">
            <tr>
                <th><b>ID: </b></th>
                <td>{{$c->id}}</td>
            </tr>
            <tr>
                <th><b>Fecha: </b></th>
                <td>{{$c->fecha}}</td>
            </tr>
            <tr>
                <th><b>Edad: </b></th>
                <td>{{$c->edad}}</td>
            </tr>
            <tr>
                <th><b>Talla: </b></th>
                <td>{{$c->talla}}</td>
            </tr>
            <tr>
                <th><b>Peso: </b></th>
                <td>{{$c->peso}}</td>
            </tr>
            <tr>
                <th><b>Temp: </b></th>
                <td>{{$c->temp}}</td>
            </tr>
            <tr>
                <th><b>FC: </b></th>
                <td>{{$c->fc}}</td>
            </tr>
            <tr>
                <th><b>PA: </b></th>
                <td>{{$c->pa}}</td>
            </tr>
            <tr>
                <th><b>FR: </b></th>
                <td>{{$c->fr}}</td>
            </tr>
            <tr>
                <th><b>Subjetivo: </b></th>
                <td>{{$c->subjetivo}}</td>
            </tr>
            <tr>
                <th><b>Objetivo: </b></th>
                <td>{{$c->objetivo}}</td>
            </tr>
            <tr>
                <th><b>Análisis: </b></th>
                <td>{{$c->analisis}}</td>
            </tr>
            <tr>
                <th><b>Plan de acción: </b></th>
                <td>{{$c->plan_de_accion}}</td>
            </tr>
        </table>

    </div><!--/showback -->
</div>

@endsection

@section('scripts')

@endsection