@extends('layouts.plantilla')
@section('content')
<br/><h1>Cartelera</h1><br/>
@foreach ($Pelicula as $P)
<div class="contenido-pelicula">
	<div class="datos-pelicula">
		<h2>{{$P->Titulo}}</h2>
		<p>{{$P->Sinopsis}}</p><br/>
		<div class="tabla">
			<div class="fila">
				<div class="celda-titulo">Título Original :</div>
				<div class="celda">{{$P->Titulo}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Estreno :</div>
				<div class="celda">{{$P->FechaEstreno}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Género :</div>
				<div class="celda">{{$P->Generos}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Director :</div>
				<div class="celda">{{$P->Director}}</div>
			</div>
			<div class="fila">
				<div class="celda-titulo">Reparto :</div>
				<div class="celda">{{$P->Reparto}}</div>
			</div>
		</div>
	</div>
	<img src="{{asset('img/pelicula/'.$P->id.'.jpg')}}" width="160" height="226"><br/><br/>
</div>
<div class="pelicula-video">
	<embed src="https://www.youtube.com/v/{{$P->Link}}" type="application/x-shockwave-flash" allowscriptaccess="always"
		allowfullscreen="true" width="580" height="400">
</div>
@endforeach
@endsection
