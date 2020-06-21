@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Registro de nuevo paciente</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_pacientes')}}" class="btn btn-primary">
            Volver al indice de pacientes
        </a>
        <hr>
        <form action="{{route('guardar_paciente')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nro. HC <b style="color:red;">*</b> </label>
                        <input type="text" name="no_hc" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. SUMI </label>
                        <input type="text" name="apellido_paterno" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>C.I.:<b style="color:red;">*</b> </label>
                        <input type="text" name="ci" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombres <b style="color:red;">*</b> </label>
                        <input type="text" name="nombres" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Paterno <b style="color:red;">*</b> </label>
                        <input type="text" name="apellido_paterno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Materno <b style="color:red;">*</b> </label>
                        <input type="text" name="apellido_materno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sexo <b style="color:red;">*</b> </label>
                        <select name="sexo" class="form-control" required>
                            <option value="">--Seleccione una opcion--</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>fecha de nacimiento <b style="color:red;">*</b> </label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ocupación <b style="color:red;">*</b> </label>
                        <input type="text" name="ocupacion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Dirección <b style="color:red;">*</b> </label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Teléfono <b style="color:red;">*</b> </label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Idioma Hablado<b style="color:red;">*</b> </label>
                        <input type="text" name="idioma_hablado" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Idioma Materno</label>
                        <input type="text" name="idioma_materno" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Auto pertenencia cultural</label>
                        <input type="text" name="auto_pertenencia_cultural" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ocupacion productiva <b style="color:red;">*</b> </label>
                        <input type="text" name="ocupacion_productiva" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ocupación reproductiva</label>
                        <input type="text" name="ocupacion_reproductiva" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gestión comunitaria</label>
                        <input type="text" name="gestion_comunitaria" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>¿Quién(s) decidieron para que acuda al servicio de salud? <b style="color:red;">*</b> </label>
                        <select name="quien_decidio" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Pareja">Pareja</option>
                            <option value="Hijo/a(s)">Hijo/a(s)</option>
                            <option value="Otro familiar">Otro familiar</option>
                            <option value="Usted Mismo">Usted Mismo</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Estado civil <b style="color:red;">*</b> </label>
                        <select name="estado_civil" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Conviviente">Conviviente</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Viudo(a)">Viudo(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Separado(a)">Separado(a)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Escolaridad <b style="color:red;">*</b> </label>
                        <select name="escolaridad" class="form-control" required>
                            <option value="">--Seleccione una opción--</option>
                            <option value="Sin instrucción">Sin instrucción</option>
                            <option value="Básico">Básico</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Medio o más">Medio o más</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Grupo Sanguíneo <b style="color:red;">*</b> </label>
                        <input type="text" name="grupo_sanguineo" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Factor Rh <b style="color:red;">*</b> </label>
                        <input type="text" name="factor_rh" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Otro</label>
                        <input type="text" name="otro" class="form-control">
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