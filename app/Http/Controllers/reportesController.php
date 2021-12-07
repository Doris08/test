<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;
use App\Medico;
use App\Establecimiento;

class reportesController extends Controller
{

	//formularios web
	public function form_medico()
	{
		$medicos = Medico::all();
		return view('reportes.form_medicos', ['medicos' => $medicos]);
	}

	public function form_establecimiento()
	{
		$establecimientos = Establecimiento::all();
		return view('reportes.form_establecimiento', ['establecimientos' => $establecimientos]);
	}

	//reportes web
	public function report_medico($id)
	{
		$recetas= Receta::where('id_medico', '=', $id)->get();
		return view('reportes.report_medicos', ['recetas' => $recetas]);
	}

	public function report_establecimiento($id)
	{
		$recetas= Receta::where('id_est', '=', $id)->get();
		return view('reportes.report_establecimiento', ['recetas' => $recetas]);
	}



}
