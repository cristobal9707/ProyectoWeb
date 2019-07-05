<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atencion;
use App\Persona;
use App\RecursosHumano;

class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('atencion.index', [
            'Atenciones' => Atencion::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atencion = Atencion::all();
        $persona = Persona::all();
        $recurso = RecursosHumano::all();
        return view('atencion.create',[
            'Atenciones' => $atencion,
            'Personas' => $persona,
            'Recursos' => $recurso
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'persona_id'=>'required',
            'recursoshumano_id'=>'required',
        ]);
        $atencion = new Atencion();
        $atencion->nombre = $valid['nombre'];
        $atencion->descripcion = $valid['descripcion'];
        $atencion->persona_id = $valid['persona_id'];
        $atencion->recursoshumano_id = $valid['recursoshumano_id'];
        $atencion->save();
        return redirect('atencion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atencion = Atencion::findOrFail($id);
        return view('atencion.show',[
            'Atenciones' => $atencion,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atencion = Atencion::all();
        $persona = Persona::all();
        $recurso = RecursosHumano::all();
        return view('atencion.edit',[
            'Atenciones' => $atencion,
            'Personas' => $persona,
            'Recursos' => $recurso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'persona_id'=>'required',
            'recursoshumano_id'=>'required',
        ]);
        $atencion = Atencion::findOrFail($id);
        $atencion->nombre = $valid['nombre'];
        $atencion->descripcion = $valid['descripcion'];
        $atencion->persona_id = $valid['persona_id'];
        $atencion->recursoshumano_id = $valid['recursoshumano_id'];
        $atencion->save();
        return redirect('atencion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atencion = Atencion::findOrFail($id);
        $atencion -> delete();
        return redirect('atencion');
    }
}
