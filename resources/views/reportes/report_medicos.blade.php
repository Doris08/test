@extends('base.base')
@section('titulo')
Medicamento
@endsection
@section('scriptsExtra')
<script type="text/javascript" src="{{ asset('js/medicamento.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Recetas por medicos</h2>
<br />

<div class="panel panel-default text-center">
	<div class="panel-heading ">
		<ul>
			<a href="../medico" class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Regresar</a>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-light" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Codigo</th>

				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@foreach($recetas as $indexKey => $receta)
				<tr>
					<td>{{$receta->id}}</td>
					<td>{{$receta->codigo}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		@endsection