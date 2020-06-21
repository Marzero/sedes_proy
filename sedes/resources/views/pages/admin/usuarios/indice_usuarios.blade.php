@extends('base.base')

@section('links')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.20/datatables.min.css"/>

@endsection

@section('content')
<h1>Indice de usuarios</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('nuevo_usuario')}}" class="btn btn-primary">
            Registrar nuevo usuario
        </a>
        <hr>
        <table id="example" class="table table-bordered table-striped table-condensed" style="width:100%">
            <thead>
                <tr>
                    <th>Nro.</th>
                    <th>E-mail</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $u)
                    <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->estado}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>
                            <a href="{{route('cambiar_estado',$u->id)}}" class="btn btn-info">
                                Cambiar estado
                            </a>
                            <a href="{{route('ver_usuario',$u->id)}}" class="btn btn-success">
                                Ver usuario
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Nro.</th>
                    <th>E-mail</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Opciones</th>
                </tr>
            </tfoot>
        </table>
    </div><!--/showback -->
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.20/datatables.min.js"></script>
<script>
    $(function(){
        $('#example').DataTable({
            "language": {
            "sProcessing":    "Procesando...",
            "sLengthMenu":    "Mostrar _MENU_ registros",
            "sZeroRecords":   "No se encontraron resultados",
            "sEmptyTable":    "Ningún dato disponible en esta tabla",
            "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":   "",
            "sSearch":        "Buscar:",
            "sUrl":           "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":    "Último",
                "sNext":    "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
        });
    });
</script>
@endsection