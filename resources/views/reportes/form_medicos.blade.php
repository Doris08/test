@extends('base.base')
@section('titulo')
Medicamento
@endsection
@section('scriptsExtra')
<script type="text/javascript" src="{{ asset('js/medicamento.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Receta por medico</h2>
<br />

<div class="panel panel-default text-center">


		<div class="panel-body">
			<div class="form-group">
				<label for="exampleFormControlSelect1">Seleccione un medico</label>
				<select class="form-control" id="select_form">
					@foreach($medicos as $indexKey => $medico)
					<option value="{{$medico->id}}">{{$medico->nombres}} {{$medico->apellidos}}</option>
					@endforeach
				</select>
			</div>

<button class="submit btn btn-primary" type="submit" id="enviar">Enviar</button>

<script type="text/javascript">
	enviar.onclick = function(){
		var id = document.getElementById('select_form').value;
		window.location.href = '../form/medico/'+id;
	};
</script>



	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->

@endsection