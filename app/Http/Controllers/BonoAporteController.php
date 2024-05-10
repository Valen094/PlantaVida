<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Arbol;
use App\Bono;
use Auth;
use Laracasts\Flash\Flash;


class BonoAporteController extends Controller
{

    public function actualizarAporte(Request $request){

        $aporte_ambiental = Solicitud::find($request->solicitud_id);
        $aporte_ambiental->fill($request->all());
        $aporte_ambiental->save();

        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','Aporte ambiental')->get();
        return view('admin.tabla_aporte',compact('solicitudes','arboles'));
   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','Aporte ambiental')->get();
        return view('admin.aporte_ambiental.index',compact('solicitudes','arboles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $solicitud = new Solicitud($request->all());
        $solicitud->cantidad_arboles = $request->cantidad_arboles;
        $solicitud->fecha_expedicion = $request->fecha_expedicion;
        $solicitud->motivo = 'Aporte ambiental';

        $usuario = Auth::user();
        if($request->web == 'si'){
            $solicitud->usuario_id = null;
        }else{

            if($usuario != null){
                $solicitud->usuario_id = $usuario->id;
            }
        }
        $solicitud->save();


        /** En este caso no seria un bono si no el certificado */
        $bono = new Bono();
        $bono->solicitud_id = $solicitud->id;
        $bono->motivo = 'Aporte ambiental';

        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','Aporte ambiental')->get();
        return view('admin.tabla_aporte',compact('solicitudes','arboles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Eliminar Solicitud de tipo aporte ambiental
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();

        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','Aporte ambiental')->get();
        return view('admin.tabla_aporte',compact('solicitudes','arboles'));
    }
}
