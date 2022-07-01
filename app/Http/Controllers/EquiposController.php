<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipos.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEquipos = request()->except('_token');
        if($request->hasFile('foto_Info_Tec')){
            $datosEquipos['foto_Info_Tec']=$request->file('foto_Info_Tec')->store('uploads','public');
        };
        equipos::insert($datosEquipos);
        return response()->json($datosEquipos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show(equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit(equipos $equipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, equipos $equipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(equipos $equipos)
    {
        //
    }
}
