@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Registro de nuevo permiso</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('indice_permisos')}}" class="btn btn-primary">
            Volver al indice de permisos
        </a>
        <hr>
        <form action="{{route('guardar_permiso')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required>
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