@extends('layouts.plantilla')
@section('content')
<br/><h1>Nuestros Cines</h1><br/>
@foreach ($Cines as $C)
<div class="contenido-cine">
	<img src="{{ asset('img/cine/'.$C->id.'.1.jpg')}}" width="227" height="170" />
	<div class="datos-cine">
		<h4>{{$C->RazonSocial}}</h4><br/>
		<span>{{$C->Direccion}} - {{$C->Detalle}}<br/><br/>Teléfono: {{$C->Telefonos}}</span>
	</div>
	<br/>
	<a href="{{route('Cine',$C->id)}}">
		<img src="{{ asset('img/varios/ico-info2.png')}}" width="150" height="40" />
	</a>
</div>
@endforeach
@endsection