@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Nuevo registro médico</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_cuaderno_medico',auth()->user()->id)}}" class="btn btn-primary">
            Volver al indice de registros médicos
        </a>
        <hr>
        <form action="{{route('guardar_registro')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Seleccione un paciente<b style="color:red;">*</b> </label>
                        <select name="paciente_id" class="form-control js-example-basic-single" id="seleccionador">
                            @foreach($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->perfil->nombres}} {{$paciente->perfil->apellido_paterno}} {{$paciente->perfil->apellido_materno}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary pull-right btn-lg">Registrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!--/showback -->
</div>

@endsection

@section('scripts')
<script>
    
</script>
@endsection