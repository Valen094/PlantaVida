<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Bono;
use App\Credito;
use App\Arbol;
use Mail;
use Auth;
use App\Mail\AlertaCompra;

class SolicitudController extends Controller
{

    /** Reporte Genral  */
    public function reporteGeneral(){

        $arboles = Arbol::get();
        $solicitudes = Solicitud::get();
        return view('admin.reporte.reporte_general',compact('solicitudes','arboles'));

    }


    /* Bono de lanzamiento */
    public function bonoLanzamiento(){

        $usuario = Auth::user();
        $arboles = Arbol::get();

        $solicitud = new Solicitud();
        $solicitud->motivo = 'lanzamiento';
        $solicitud->solicitante = 'pn';
        $solicitud->nombre_apellido = 'nombre';
        $solicitud->identificacion = 'identificacion';
        $solicitud->direccion = 'direccion';
        $solicitud->telefono = 'telefono';
        $solicitud->municipio = 'municipio';
        $solicitud->correo_electronico = 'correo';
        $solicitud->municipio_beneficiario = 'mun beneficiario';
        $solicitud->departamento_beneficiario = 'dep beneficiario';
        $solicitud->observaciones = 'observaciones';
        $solicitud->usuario_id = $usuario->id;
        $solicitud->save();

        $solicitudes = Solicitud::where('motivo','!=','Aporte ambiental')->get();
        return view('admin.tabla_solicitudes',compact('solicitudes','arboles'));
        
    }

    public function estado($solicitud_id, $estado){

        $solicitud = Solicitud::find($solicitud_id);
        $solicitud->estado = $estado;
        $solicitud->save();

        return response()->json($solicitud);
    }


    public function arbolReporte($arbol_id){

        $datos = explode(",", $arbol_id);
        $arbol_id = $datos[0];
        $solicitud_id = $datos[1];

        $solicitud = Solicitud::find($solicitud_id);
        if($arbol_id == 'NA'){
            $solicitud->arbol_id = null;
        }else{
            $solicitud->arbol_id = $arbol_id;
        }
        
        $solicitud->save();
        $arboles = Arbol::get();
        $solicitudes = Solicitud::get();
        return view('admin.reporte.reporte_general',compact('solicitudes','arboles'));
    }

    /**
     * Funcion para agregar un arbol a la Solicitud
     */
    public function agregarArbol($arbol_id){

        $datos = explode(",", $arbol_id);
        $arbol_id = $datos[0];
        $solicitud_id = $datos[1];

        $solicitud = Solicitud::find($solicitud_id);
        if($arbol_id == 'NA'){
            $solicitud->arbol_id = null;
        }else{
            $solicitud->arbol_id = $arbol_id;
        }
        
        $solicitud->save();
        return response()->json('Actualizacion realizada con exito!!');
    }


    public function pagoVerificado($solicitud_id, $pago_verificado){

        $solicitud = Solicitud::find($solicitud_id);
        $solicitud->pago_verificado = $pago_verificado;
        $solicitud->save();

        return response()->json($solicitud);
  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
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

        $usuario = Auth::user();
        $solicitud = new Solicitud($request->all());

        if($request->web == 'si'){  // 7 es el id de usuario web osea que se envia desde la pagina
            $solicitud->usuario_id = 7;
        }else{

            if($usuario != null){
                $solicitud->usuario_id = $usuario->id;
            }
        }

   
        if($request->solicitante == 'pn'){

            $solicitud->solicitante = $request->solicitante;
            $solicitud->nombre_apellido  = $request->nombre_apellido;
            $solicitud->identificacion = $request->identificacion;
            $solicitud->direccion = $request->direccion_pn;
            $solicitud->telefono = $request->telefono_pn;
            $solicitud->correo_electronico = $request->correo_pn;
            $solicitud->motivo = $request->motivo_pn;
            $solicitud->quien = $request->quien_pn;
            $solicitud->departamento = $request->departamento_pn;
            $solicitud->municipio = $request->municipio_pn;
            $solicitud->trato = $request->trato_pn;
            $solicitud->manifestacion = $request->manifestacion_pn;
        }
    
        if($request->solicitante == 'pj'){

            $solicitud->solicitante = $request->solicitante;
            $solicitud->razon_social = $request->razon_social;
            $solicitud->nit = $request->nit;
            $solicitud->direccion = $request->direccion_pj;
            $solicitud->telefono = $request->telefono_pj;
            $solicitud->correo_electronico = $request->correo_pj;
            $solicitud->motivo = $request->motivo_pj;
            $solicitud->quien = $request->quien_pj;
            $solicitud->departamento = $request->departamento_pj;
            $solicitud->municipio = $request->municipio_pj;
            $solicitud->trato = $request->trato_pj;
            $solicitud->manifestacion = $request->manifestacion_pj;
        }

        if($request->tipo_bono == 'Condolencias'){
            $solicitud->motivo = 'Condolencias';
        }

        if($request->tipo_bono == 'aporte'){
            $solicitud->motivo = 'Aporte ambiental';
        }

        if($request->tipo_bono == 'Conmemoracion'){
            $solicitud->motivo = 'Bono memoria';
        }

    
        $solicitud->save();

        $bono = new Bono();
        $bono->solicitud_id = $solicitud->id;
        $bono->motivo = $solicitud->motivo;

        if($solicitud->nombre_apellido != null){
            $bono->solicitante = $solicitud->nombre_apellido;
        }

        if($solicitud->razon_social != null){
            $bono->solicitante = $solicitud->razon_social;
        }

        $bono->beneficiario = $solicitud->dirigido;
        $bono->save();

        if($request->medio_pago == 'Credito'){

            $cuota1 = new Credito();
            $cuota1->cuota = 1;
            $cuota1->valor = $request->valor_1;
            $cuota1->fecha = $request->fecha_1;
            $cuota1->pago = $request->pago_1;
            $cuota1->solicitud_id = $solicitud->id;
            $cuota1->save();


            $cuota2 = new Credito();
            $cuota2->cuota = 2;
            $cuota2->valor = $request->valor_2;
            $cuota2->fecha = $request->fecha_2;
            $cuota2->pago = $request->pago_2;
            $cuota2->solicitud_id = $solicitud->id;
            $cuota2->save();

        }


        if($request->web == 'si'){

            $destinatario = [ 'sandramilena@camaraarmenia.org.co','noraisabelbb@camaraarmenia.org.co','edwin@camaraarmenia.org.co', $solicitud->correo_electronico];
        
           Mail::to( $destinatario)->queue(new AlertaCompra($solicitud));
           return "Usuario web Creado";
        }else{

            $usuario = Auth::user();

            $arboles = Arbol::get();
            $solicitudes = Solicitud::where('motivo','!=','Aporte ambiental')->orderBy('id', 'ASC')->get();
            return view('admin.tabla_solicitudes',compact('solicitudes','arboles'));
            //SI HAY UN USUARIO FUNERARIA SE DEBE CARGAR SOLO SU INFORMACION 
        }

    }

    /**
     * Funcion para actualizar las solicitudes 
     */
    public function actualizarSolicitud(Request $request){

        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->fill($request->all());


        if($request->solicitante == "pn"){

            $solicitud->direccion = $request->direccion_pn;
            $solicitud->departamento = $request->departamento_pn;
            $solicitud->municipio = $request->municipio_pn;
            $solicitud->telefono = $request->telefono_pn;
            $solicitud->correo_electronico = $request->correo_pn;
            $solicitud->motivo = $request->motivo_pn;
            $solicitud->quien = $request->quien_pn;
            $solicitud->trato = $request->trato_pn;
            $solicitud->trato_donante = $request->trato_donante_pn;
            $solicitud->manifestacion = $request->manifestacion_pn;

        }

        if($request->solicitante == "pj"){

            $solicitud->razon_social = $request->razon_social;
            $solicitud->nit = $request->nit;
            $solicitud->direccion = $request->direccion_pj;
            $solicitud->telefono = $request->telefono_pj;
            $solicitud->correo_electronico = $request->correo_pj;
            $solicitud->motivo = $request->motivo_pj;
            $solicitud->quien =  $request->quien_pj;
            $solicitud->departamento = $request->departamento_pj;
            $solicitud->municipio = $request->municipio_pj;
            $solicitud->trato = $request->trato_pj;
            $solicitud->trato_donante = $request->trato_donante_pj;
            $solicitud->manifestacion = $request->manifestacion_pj;
        }

        $solicitud->save();


        // si la solicitud tiene cuotas
        if(count($solicitud->cuotas_credito) > 0 ){

            $cuota1 = Credito::find($request->pago_1_id);
            $cuota1->valor = $request->valor_1;
            $cuota1->fecha = $request->fecha_1;
            $cuota1->pago = $request->pago_1_edit;
            $cuota1->save();

            $cuota2 = Credito::find($request->pago_2_id);
            $cuota2->valor = $request->valor_2;
            $cuota2->fecha = $request->fecha_2;
            $cuota2->pago = $request->pago_2_edit;
            $cuota2->save();

        }

        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','!=','Aporte ambiental')->get();
        return view('admin.tabla_solicitudes',compact('solicitudes','arboles'));
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
        $solicitud = Solicitud::find($id);
        $cuotas = $solicitud->cuotas_credito;
        return response()->json([$solicitud,$cuotas]);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();

        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','!=','Aporte ambiental')->get();
        return view('admin.tabla_solicitudes',compact('solicitudes','arboles'));
    }


   
}
