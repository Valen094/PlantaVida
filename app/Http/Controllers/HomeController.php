<?php

namespace App\Http\Controllers;
use App\Solicitud;
use App\Arbol;
use Laracasts\Flash\Flash;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arboles = Arbol::get();
        $solicitudes = Solicitud::where('motivo','!=','Aporte ambiental')->get();
        return view('home',compact('solicitudes','arboles'));
    }
}
