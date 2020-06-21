@extends('base.base')

@section('links')

@endsection

@section('content')
<h1>Paciente: {{$p->perfil->nombres}}  {{$p->perfil->apellido_paterno}}  {{$p->perfil->apellido_materno}}</h1>
<div class="row">
    <div class="col-md-4">
        <div class="white-panel">
            <div class="white-header">
                <h5 style="color:#666565;">A. Datos administrativos</h5>
            </div>
            <p><img src="{{ URL::to('profile.jpg') }}" class="img-circle" width="80"></p>
            <h3><b style="color:#666565;"> {{$p->perfil->apellido_paterno}} {{$p->perfil->apellido_materno}} {{$p->perfil->nombres}}</b></h3>
            <div class="row">
                <div class="col-md-12">
                <p style="color:#666565;"><b>Fecha de Nacimiento: </b> {{ $p->perfil->fecha_nacimiento }}</p>
                <p style="color:#666565;"><b>Dirección: </b> {{ $p->perfil->direccion }}</p>
                </div>
            </div>
            <HR></HR>
            <div class="row">
                <div class="col-md-12">
                    <p style="color:#666565;">B. IDENTIFICACION DEL PACIENTE</p>
                    <table class="table table-bordered table-striped table-condensed">
                        <tr><th style="color:#666565;"><b>Sexo: </b></th><td style="color:#666565;">{{ $p->perfil->sexo }}</td></tr>
                        <tr><th style="color:#666565;"><b>Idioma hablado: </b></th><td style="color:#666565;">{{ $p->perfil->idiomas_hablado }}</td></tr>
                        <tr><th style="color:#666565;"><b>Nombres: </b></th><td style="color:#666565;">{{ $p->perfil->nombres }}</td></tr>
                        <tr><th style="color:#666565;"><b>: </b></th><td style="color:#666565;">{{ $p->perfil->nombres }}</td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="small mt">MEMBER SINCE</p>
                    <p>2012</p>
                </div>
                <div class="col-md-6">
                    <p class="small mt">TOTAL SPEND</p>
                    <p>$ 47,60</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="showback" style="overflow-x:auto">
            <h2>Datos de Historia Clinica</h2>
            <div class="showback">
                <a href="{{route('indice_pacientes')}}" class="btn btn-primary">
                    <span class="fa fa-chevron-left text-transparent"></span> Volver al indice de pacientes
                </a>
                <hr>        
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Historial</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Chequeos Médicos</a></li>
                      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">.</a></li>
                      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">.</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--  //////////////////////////////        PANEL DE HISTORIAL CLINICO         ////////////////////////////  -->
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <h1>Historial Clinico</h1>
                            <a herf="#" class="btn btn-success">
                                Impresion de hoja frontal
                            </a>
                            <hr>
        
                        </div>
        
                        <!--  //////////////////////////////        PANEL DE CHEQUEOS MEDICOS          ////////////////////////////  -->
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <h1>chequeos médicos</h1>
                            <a href="{{route('nuevo_chequeo',$p->id)}}" class="btn btn-primary">
                                Registrar nuevo chequeo médico
                            </a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($chequeos as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->fecha }}</td>
                                        <td>
                                            <a href="{{ route('ver_chequeo',$c->id) }}">Ver</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--  //////////////////////////////        PANEL 3          ////////////////////////////  -->
                        <div role="tabpanel" class="tab-pane" id="messages">
                            .3..
                        </div>
                        <!--  //////////////////////////////        PANEL 4          ////////////////////////////  -->
                        <div role="tabpanel" class="tab-pane" id="settings">
                            4...
                        </div>
                    </div>
                </div>
            </div><!--/showback -->
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="showback">
        <a href="{{route('indice_pacientes')}}" class="btn btn-primary">
            <span class="fa fa-chevron-left text-transparent"></span> Volver al indice de pacientes
        </a>
        <hr>        
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Historial</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Chequeos Médicos</a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">.</a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">.</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!--  //////////////////////////////        PANEL DE HISTORIAL CLINICO         ////////////////////////////  -->
                <div role="tabpanel" class="tab-pane active" id="home">
                    <h1>Historial Clinico</h1>
                    <a herf="#" class="btn btn-success">
                        Impresion de hoja frontal
                    </a>
                    <hr>

                </div>

                <!--  //////////////////////////////        PANEL DE CHEQUEOS MEDICOS          ////////////////////////////  -->
                <div role="tabpanel" class="tab-pane" id="profile">
                    <h1>chequeos médicos</h1>
                    <a href="{{route('nuevo_chequeo',$p->id)}}" class="btn btn-primary">
                        Registrar nuevo chequeo médico
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chequeos as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->fecha }}</td>
                                <td>
                                    <a href="{{ route('ver_chequeo',$c->id) }}">Ver</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--  //////////////////////////////        PANEL 3          ////////////////////////////  -->
                <div role="tabpanel" class="tab-pane" id="messages">
                    .3..
                </div>
                <!--  //////////////////////////////        PANEL 4          ////////////////////////////  -->
                <div role="tabpanel" class="tab-pane" id="settings">
                    4...
                </div>
            </div>
        </div>
    </div><!--/showback -->
</div>

@endsection

@section('scripts')
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
</script>
@endsection