@extends('base.base')

@section('links')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection

@section('content')
<h1>Registros médicos</h1>
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        {{-- <h4><i class="fa fa-angle-right"></i>Indice de usuarios</h4> --}}
        <a href="{{route('nuevo_registro_cuaderno_medico')}}" class="btn btn-primary">
            Nuevo registro
        </a>
        <hr>
        <table id="example" class="table table-bordered table-striped table-condensed" style="width:100%">
            <thead>
                <tr>
                    <th>Nro.</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Estado civil</th>
                    <th>Ocupación</th>
                    <th>Dato</th>
                    <th>edad</th>
                    <th>Diagnóstico</th>
                    <th>Ficha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->fecha}}</td>
                        <td>{{$r->nombre}}</td>
                        <td>{{$r->estado_civil}}</td>
                        <td>{{$r->ocupacion}}</td>
                        <td>{{$r->dato}}</td>
                        <td>{{$r->edad}}</td>
                        <td>{{$r->diagnostico}}</td>
                        <td>{{$r->nro_ficha}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Nro.</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Estado civil</th>
                    <th>Ocupación</th>
                    <th>Dato</th>
                    <th>edad</th>
                    <th>Diagnóstico</th>
                    <th>Ficha</th>
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







