@extends('base.base')
@section('titulo')
Medicamento
@endsection
@section('scriptsExtra')
<script type="text/javascript" src="{{ asset('js/medicamento.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Medicamentos</h2>
<br />

<div class="panel panel-default text-center">
	<div class="panel-heading ">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Medicamento</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-light" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($medicamentos)<=0)
				<script type="text/javascript">
					window.onload = function() {
						Swal.fire(
  						'Error!',
  						'No hay medicamentos elistados!',
  						'error'
					)
					};
				</script>
				@endif
				@foreach($medicamentos as $indexKey => $medicamento)
				<tr class="itemMedicamento{{$medicamento->id}}">
					<td>{{$medicamento->nombre_medicamento}}</td>
					<td>	
						<button class="edit-modal btn btn-info" data-id="{{$medicamento->id}}" data-medicamento="{{$medicamento->nombre_medicamento}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$medicamento->id}}" data-medicamento="{{$medicamento->nombre_medicamento}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('Medicamento_CRUD.eliminar-medicamento')
		@include('Medicamento_CRUD.registro-medicamento')
		@include('Medicamento_CRUD.editar-medicamento')
		@endsection