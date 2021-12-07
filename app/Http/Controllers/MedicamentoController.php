<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;

use App\Establecimiento;
use App\Receta;
use App\Paciente;
use App\Medicamento;


class MedicamentoController extends Controller
{

    //reglas para validar los campos 
    protected $rules =['nombre_medicamento' => 'required'];

    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('Medicamento_CRUD.index', ['medicamentos' => $medicamentos]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $medicamento = new Medicamento();
            $medicamento->nombre_medicamento = $request->nombre_medicamento;
            $medicamento->save();
            return response()->json($medicamento);
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
     $validator = Validator::make($request->all(), $this->rules);
     if ($validator->fails()) {
        Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->nombre_medicamento = $request->nombre_medicamento;
        $medicamento->save();
        return response()->json($medicamento);
    }
}

public function destroy($id)
{
    $medicamento = Medicamento::findOrFail($id);
    $medicamento->delete();
    return response()->json($medicamento);
}
}
