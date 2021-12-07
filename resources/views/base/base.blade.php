<!DOCTYPE html>
<html>
<head>
	@section('head') @include('base.head') @show
	<title>@section('titulo') Base @show</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@section('body')
	@section('navbar') @include('base.navbar') @show

	<main role="main" class="container">
		<br>
		@show
		@section('contenido')
		
		@show
	</main>
	@section('footer') @include('base.footer') @show
	@section('scriptsExtra') @show
	@show
</body>
</html>