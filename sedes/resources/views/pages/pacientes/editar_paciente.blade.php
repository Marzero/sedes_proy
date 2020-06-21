@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Editar datos de paciente</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_pacientes')}}" class="btn btn-primary">
            Volver al indice de pacientes
        </a>
        <hr>
        <form action="{{route('actualizar_paciente')}}" method="post">
            @csrf
        <input type="hidden" name="paciente_id" value="{{$paciente->id}}">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nro. HC <b style="color:red;">*</b> </label>
                    <input value="{{$paciente->no_hc}}" type="text" name="no_hc" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. SUMI <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->no_sumi}}" type="text" name="apellido_paterno" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>C.I.:<b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->ci}}"  type="text" name="ci" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombres <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->nombres}}" type="text" name="nombres" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Paterno <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->apellido_paterno}}" type="text" name="apellido_paterno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Materno <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->apellido_materno}}" type="text" name="apellido_materno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sexo <b style="color:red;">*</b> </label>
                        <select name="sexo" class="form-control" required>
                            <option value="">--Seleccione una opcion--</option>
                        <option value="Masculino" {{ old('sexo',$paciente->perfil->sexo)=='Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Femenino" {{ old('sexo',$paciente->perfil->sexo)=='Femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>fecha de nacimiento <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->fecha_nacimiento}}" type="date" name="fecha_nacimiento" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ocupación <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->ocupacion}}" type="text" name="ocupacion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Dirección <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->direccion}}" type="text" name="direccion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Teléfono <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->perfil->telefono}}" type="text" name="telefono" class="form-control" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Idioma Hablado<b style="color:red;">*</b> </label>
                        <input value="{{$paciente->idioma_hablado}}" type="text" name="idioma_hablado" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Idioma Materno</label>
                        <input value="{{$paciente->idioma_materno}}" type="text" name="idioma_materno" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Auto pertenencia cultural</label>
                        <input value="{{$paciente->auto_pertenencia_cultural}}" type="text" name="auto_pertenencia_cultural" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ocupacion productiva <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->ocupacion_productiva}}" type="text" name="ocupacion_productiva" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ocupación reproductiva</label>
                        <input value="{{$paciente->ocupacion_reproductiva}}" type="text" name="ocupacion_reproductiva" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gestión comunitaria</label>
                        <input value="{{$paciente->gestion_comunitaria}}" type="text" name="gestion_comunitaria" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>¿Quién(s) decidieron para que acuda al servicio de salud? <b style="color:red;">*</b> </label>
                        <select name="quien_decidio" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Pareja" {{ old('quien_decidio',$paciente->quien_decidio)=='Pareja' ? 'selected' : '' }}>Pareja</option>
                            <option value="Hijo/a(s)" {{ old('quien_decidio',$paciente->quien_decidio)=='Hijo/a(s)' ? 'selected' : '' }}>Hijo/a(s)</option>
                            <option value="Otro familiar" {{ old('quien_decidio',$paciente->quien_decidio)=='Otro familiar' ? 'selected' : '' }}>Otro familiar</option>
                            <option value="Usted Mismo" {{ old('quien_decidio',$paciente->quien_decidio)=='Usted Mismo' ? 'selected' : '' }}>Usted Mismo</option>
                            <option value="Otro" {{ old('quien_decidio',$paciente->quien_decidio)=='Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Estado civil <b style="color:red;">*</b> </label>
                        <select name="estado_civil" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Conviviente" {{ old('estado_civil',$paciente->estado_civil)=='Conviviente' ? 'selected' : '' }}>Conviviente</option>
                            <option value="Casado(a)" {{ old('estado_civil',$paciente->estado_civil)=='Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                            <option value="Viudo(a)" {{ old('estado_civil',$paciente->estado_civil)=='Viudo(a)' ? 'selected' : '' }}>Viudo(a)</option>
                            <option value="Divorciado(a)" {{ old('estado_civil',$paciente->estado_civil)=='Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                            <option value="Separado(a)" {{ old('estado_civil',$paciente->estado_civil)=='Separado(a)' ? 'selected' : '' }}>Separado(a)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Escolaridad <b style="color:red;">*</b> </label>
                        <select name="escolaridad" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Sin instrucción" {{ old('escolaridad',$paciente->escolaridad)=='Sin instrucción' ? 'selected' : '' }}>Sin instrucción</option>
                            <option value="Básico" {{ old('escolaridad',$paciente->escolaridad)=='Básico' ? 'selected' : '' }}>Básico</option>
                            <option value="Intermedio" {{ old('escolaridad',$paciente->escolaridad)=='Intermedio' ? 'selected' : '' }}>Intermedio</option>
                            <option value="Medio o más" {{ old('escolaridad',$paciente->escolaridad)=='Medio o más' ? 'selected' : '' }}>Medio o más</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Grupo Sanguíneo <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->grupo_sanguineo}}" type="text" name="grupo_sanguineo" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Factor Rh <b style="color:red;">*</b> </label>
                        <input value="{{$paciente->factor_rh}}" type="text" name="factor_rh" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Otro</label>
                        <input value="{{$paciente->otro}}" type="text" name="otro" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary pull-right btn-lg">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div><!--/showback -->
</div>

@endsection

@section('scripts')

@endsection