@extends('base.base')

@section('links')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.20/datatables.min.css"/>

@endsection

@section('content')
<h1> Usuario - {{ $u->id }}  </h1>
<div class="row">
    <div class="col-md-4">
        <div class="showback">
            <h3>{{$u->email}}</h3>
            <hr>
            <h4>{{$u->perfil->apellido_paterno}} {{$u->perfil->apellido_materno}}</h4>
            <h4>{{$u->perfil->nombres}}</h4>
        </div>
    </div>
    <div class="col-md-8">
        <div class="showback" style="overflow-x:auto">
            <h2>Permisos</h2>
            <table id="example" class="table table-bordered table-striped table-condensed" style="width:100%">
                <thead>
                    <tr>
                        <th>Id de permiso</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permisos as $p)
                      <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>
                          <form method="POST" action="{{ route('asignaciones.asignar') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ $u->id }}">
                            <input type="hidden" name="permiso" value="{{ $p->id }}">
                            <input class="per" type="checkbox" name="{{ $p->id }}" id="permiso_{{ $p->id }}" onclick="register(this)" {{ $u->hasPermissionTo($p) ? 'checked' : '' }}>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
<script>
    function register(elemento){
      const us={!! json_encode($u) !!};
      var configuracion = { 
          usuario: us.id,
          permiso: elemento.name
      };
      //var datos = configuracion.serialize();
      //console.log(configuracion);
      $.ajax({
        url: '{{ URL::to('asignar_permiso') }}'+'/'+configuracion,
        data: configuracion,
        dataType:"json",
        success: function(respuesta) {
          //console.log(respuesta);
          var resp=respuesta;
          console.log(resp)
          var spaner=$("#texto_"+elemento.name).text();
          //var spaner=getElementById("#texto_"+elemento.name);
          {{-- if(resp='permiso otorgado'){
                            //$("#texto_"+elemento.name).text()="Activo";
                            alert('Activo');
                          }else{
                            //$("#texto_"+elemento.name).text()="Inactivo";
                            alert('Inactivo');
                          } --}}
        },
        error: function() {
              console.log("No se ha podido obtener la información");
          }
      });
    }
  </script>
@endsection