@extends('base.base')

@section('content')
<h3><i class="fa fa-angle-right"></i>  Bienvenido - {{ Auth()->user()->name }}</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p>Este es el inicio</p>
          		</div>
          	</div>

@endsection
