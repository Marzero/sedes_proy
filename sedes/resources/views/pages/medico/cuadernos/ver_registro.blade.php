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
        <form action="{{route('actualizar_registro')}}" method="post">
            @csrf
        <input type="hidden" value="{{ $r->id }}" name="registro_id">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" value="{{$r->nombre}}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ficha</label>
                        <input type="number" name="nro_ficha" value="{{$r->nro_ficha}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Dato</label>
                        @if($r->dato=='X')
                            <input type="checkbox" checked name="dato" value="true">
                        @else
                            <input type="checkbox" name="dato">
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Diagnostico</label>
                    <textarea name="diagnostico" id="" cols="30" rows="10" class="form-control">{{$r->diagnostico}}</textarea>
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