<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Solicitud;
use Laracasts\Flash\Flash;

class BonoPdfController extends Controller
{


    public function generarCertificado($solicitud_id){


        $solicitud = solicitud::find($solicitud_id);

        if($solicitud->arbol == null){
            flash('Debe agregar un arbol a la solicitud')->error();
            return redirect('admin/aporte');
        }else{
            return view('admin.certificado.pdf',compact('solicitud'));
        }
    
    }

    public function generarPdf($solicitud_id)
    {
        $solicitud = solicitud::find($solicitud_id);

        if($solicitud->arbol == null){
            flash('Debe agregar un arbol a la solicitud')->error();
            return redirect('home');
        }else{

            return view('admin.bono.pdf',compact('solicitud'));

           // return \PDF::loadView('admin.bono.pdf',compact('solicitud'))
           // ->setPaper('letter')
           // ->download('Bono.pdf'); 
    
        }
 
    }

    public function generarCarta($solicitud_id)
    {
        $solicitud = solicitud::find($solicitud_id);

        if($solicitud->arbol == null){
            flash('Debe agregar un arbol a la solicitud')->error();
            return redirect('home');
        }else{
            
            return view('admin.bono.carta',compact('solicitud'));

            //return \PDF::loadView('admin.bono.carta',compact('solicitud'))
            //->setPaper('letter')
            //->download('Carta.pdf'); 
        }
        
    }
}
