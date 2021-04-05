<?php

namespace App\Http\Controllers;

use App\Models\contratistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContratistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['contratistas']=contratistas::paginate(10);

        return view('contratistas.index',$datos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contratistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'NombreCompleto'=>'required|string|max:100',
            'FechaNacimiento'=>'required|string|max:100',
            'Cedula'=>'required|string|max:100',
            'Edad'=>'required|string|max:100',
            'PerfilFormacion'=>'required|string|max:100',
            'ExperienciaPublicoPrivado'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Correo'=>'required|email|max:100',
            'Direccion'=>'required|string|max:100',
            'IBC'=>'required|string|max:100',
            'Honorarios'=>'required|string|max:100',
            'Diferencia'=>'required|string|max:100',
            'Referidos'=>'required|string|max:100',
            'Tecnica'=>'required|string|max:100',
            'Participacion'=>'required|string|max:100',
            'Redes'=>'required|string|max:100',
            'Necesidad'=>'required|string|max:100',
            'Indicador'=>'required|string|max:100',
            'GrupoInternoTrabajo'=>'required|string|max:100',
            'Observaciones'=>'required|string|max:100',
            'Universidad'=>'required|string|max:100',
            'EPS'=>'required|string|max:100',
            'Pension'=>'required|string|max:100',
            'ARL'=>'required|string|max:100',
            'NumeroContrato'=>'required|string|max:100',
            'Tiempo'=>'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        //$datosContratistas=request()->all();

        $datosContratistas=request()->except('_token');

        if ($request->hasFile('Foto')){

            $datosContratistas['Foto']=$request->file('Foto')->store('uploads','public');
        }

        contratistas::insert($datosContratistas);

        //return response()->json($datosContratistas);
        return redirect('contratistas')->with('Mensaje','Contratista agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function show(contratistas $contratistas)        
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $contratista= contratistas::findOrFail($id);

        return view('contratistas.edit',compact('contratista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
            'NombreCompleto'=>'required|string|max:100',
            'FechaNacimiento'=>'required|string|max:100',
            'Cedula'=>'required|string|max:100',
            'Edad'=>'required|string|max:100',
            'PerfilFormacion'=>'required|string|max:100',
            'ExperienciaPublicoPrivado'=>'required|string|max:100',
            'Celular'=>'required|string|max:100',
            'Correo'=>'required|email|max:100',
            'Direccion'=>'required|string|max:100',
            'IBC'=>'required|string|max:100',
            'Honorarios'=>'required|string|max:100',
            'Diferencia'=>'required|string|max:100',
            'Referidos'=>'required|string|max:100',
            'Tecnica'=>'required|string|max:100',
            'Participacion'=>'required|string|max:100',
            'Redes'=>'required|string|max:100',
            'Necesidad'=>'required|string|max:100',
            'Indicador'=>'required|string|max:100',
            'GrupoInternoTrabajo'=>'required|string|max:100',
            'Observaciones'=>'required|string|max:100',
            'Universidad'=>'required|string|max:100',
            'EPS'=>'required|string|max:100',
            'Pension'=>'required|string|max:100',
            'ARL'=>'required|string|max:100',
            'NumeroContrato'=>'required|string|max:100',
            'Tiempo'=>'required|string|max:100',
        ];
        if ($request->hasFile('Foto')){

            $campos+=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
        }
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje); 


        $datosContratistas=request()->except(['_token','_method']);


        if ($request->hasFile('Foto')){

            $contratista= contratistas::findOrFail($id);

            Storage::delete('public/'.$contratista->Foto);

            $datosContratistas['Foto']=$request->file('Foto')->store('uploads','public');
        }


        contratistas::where('id','=',$id)->update($datosContratistas);

        //$contratista= contratistas::findOrFail($id);
        //return view('contratistas.edit',compact('contratista'));
        return redirect('contratistas')->with('Mensaje','Contratista modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    $contratista= contratistas::findOrFail($id);

    if (Storage::delete('public/'.$contratista->Foto)){
        Contratistas::destroy($id);

    }

    
    
    return redirect('contratistas')->with('Mensaje','Contratista eliminado');
    }
}
