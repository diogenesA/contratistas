<?php

namespace App\Http\Controllers;

use App\Models\contratistas;
use Illuminate\Http\Request;

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
        return view('contratistas.index');
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

        //$datosContratistas=request()->all();

        $datosContratistas=request()->except('_token');

        Contratistas::insert($datosContratistas);

        return response()->json($datosContratistas);
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
    public function edit(contratistas $contratistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contratistas $contratistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contratistas  $contratistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(contratistas $contratistas)
    {
        //
    }
}
