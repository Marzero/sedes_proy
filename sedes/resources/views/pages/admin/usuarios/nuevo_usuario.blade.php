@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Registro de nuevo usuario</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_usuarios')}}" class="btn btn-primary">
            Volver al indice de usuarios
        </a>
        <hr>
        <form action="{{route('guardar_usuario')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" name="nombres" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" name="apellido_paterno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido Materno</label>
                        <input type="text" name="apellido_materno" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sexo</label>
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
                        <label>fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Ocupación</label>
                        <input type="text" name="ocupacion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" required>
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