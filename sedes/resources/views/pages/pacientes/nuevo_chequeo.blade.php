@extends('base.base')

@section('links')

@endsection

@section('content')
@php
    $fecha=date('d-m-Y');
@endphp
<h1>Paciente: {{$p->perfil->nombres}}  {{$p->perfil->apellido_paterno}}  {{$p->perfil->apellido_materno}}</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('ver_paciente',$p->id)}}" class="btn btn-primary">
            Volver a la vista del paciente
        </a>
        <h1>Nuevo chequeo</h1>
        <hr>
        <form action="{{route('guardar_chequeo')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Fecha</label>
                    <input type="text" value="{{$fecha}}" name="fecha" class="form-control" disabled>
                    </div>
                </div>
                <input type="hidden" value="{{ $p->id }}" name="paciente_id">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" name="edad" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Talla</label>
                        <input type="number" step="0.01" name="talla" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Peso</label>
                        <input type="text" name="peso" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Temp</label>
                        <input type="text" name="temp" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>FC</label>
                        <input type="text" name="fc" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>PA</label>
                        <input type="text" name="pa" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>FR</label>
                        <input type="text" name="fr" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Subjetivo</label>
                        <textarea class="form-control" name="subjetivo" id="subjetivo" cols="150" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Objetivo</label>
                        <textarea class="form-control" name="objetivo" id="objetivo" cols="150" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Análisis</label>
                        <textarea class="form-control" name="analisis" id="analisis" cols="150" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Plan de acción</label>
                        <textarea class="form-control" name="plan_de_accion" id="plan_de_accion" cols="150" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!--/showback -->
</div>

@endsection

@section('scripts')

@endsection