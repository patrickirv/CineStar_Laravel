@extends('layouts.plantilla')
@section('content')
<br/><h1>Cartelera</h1><br/>
@foreach ($Peliculas as $P)
<div class="contenido-pelicula">
	<div class="datos-pelicula">
		<h2>{{$P->Titulo}}</h2><br/>
		<p>{{$P->Sinopsis}}</p><br/>
		<div class="boton-pelicula">
			<a href="{{route('Pelicula',$P->id)}}">
				<img src="{{asset('img/varios/btn-mas-info.jpg')}}" width="120" height="30" alt="Ver info" />
			</a>
		</div>
		<div class="boton-pelicula">
			<a href="https://www.youtube.com/v/{{$P->Link}}" target=_blank
				onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
				<img src="{{asset('img/varios/btn-trailer.jpg')}}" width="120" height="30" alt="Ver trailer" />
			</a>
		</div>
	</div>
	<img src="{{asset('img/pelicula/'.$P->id.'.jpg')}}" width="160" height="226" /><br/><br/>
</div>
@endforeach
@endsection
