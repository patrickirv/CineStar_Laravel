@extends('layouts.plantilla')
@section('content')
@foreach ($Cine as $C)
	<h2>{{ $C->RazonSocial }}</h2>
	<div class="cine-info">
		<div class="cine-info datos">
			<p>{{ $C->Direccion }} - {{ $C->Detalle }}</p>
			<p>Teléfono: {{ $C->Telefonos }} anexo 865</p><br />
@endforeach
<div class="tabla">
	@foreach ($Tarifas as $T => $valor)
		@if ($T % 2 == 0)
			<div class="fila">
				<div class="celda-titulo">{{ $valor->DiasSemana }}</div>
				<div class="celda">{{ $valor->Precio }}</div>
			</div>
		@else
			<div class="fila impar">
				<div class="celda-titulo">{{ $valor->DiasSemana }}</div>
				<div class="celda">{{ $valor->Precio }}</div>
			</div>
		@endif
	@endforeach
</div>
<div class="aviso">
	<p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00
		adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya
		para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño,
		Tumbes y Tacna.</p>
</div>
</div>
@foreach ($Cine as $C1)
	<img src="{{ asset('img/cine/' . $C1->id . '.2.jpg') }}" />
@endforeach
<br /><br />
<h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br />
<div class="cine-info peliculas">
	<div class="tabla">
		<div class="fila">
			<div class="celda-cabecera">Películas</div>
			<div class="celda-cabecera">Horarios</div>
		</div>
		@foreach ($Peliculas as $P => $valor1)
			@if ($P % 2 == 0)
				<div class="fila impar">
					<div class="celda-titulo">{{ $valor1->Titulo }}</div>
					<div class="celda">{{ $valor1->Horarios }}</div>
				</div>
			@else
				<div class="fila">
					<div class="celda-titulo">{{ $valor1->Titulo }}</div>
					<div class="celda">{{ $valor1->Horarios }}</div>
				</div>
			@endif
		@endforeach
	</div>
</div>
</div>
<div>
	@foreach ($Cine as $C2)
		<img style="float:left;" src="{{ asset('img/cine/' . $C2->id . '.3.jpg') }}" alt="Imagen del cine" />
	@endforeach
	<span class="tx_gris">Precios de los juegos: desde S/1.00 en todos los Cine Star.<br />
		Horario de atención de juegos es de 12:00 m hasta las 10:30 pm.
		<br /><br />
		Visitános y diviértete con nosotros.
		<br /><br />
		<b>CINESTAR</b>, siempre pensando en tí.
	</span>
</div>
</div>
@endsection
