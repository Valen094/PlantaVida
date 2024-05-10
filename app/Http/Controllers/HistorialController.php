<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Seguimiento;
use Imagecow\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;

class HistorialController extends Controller
{
    /**
     * Funcion para Consultar Historial
     */
    public function consultarHistorial($solicitud_id)
    {
        $solicitud = Solicitud::find($solicitud_id);
        if ($solicitud == null) {
            return response()->json(0);
        }

        if ($solicitud != null) {
            $seguimientos = $solicitud->seguimientos;
            return view('visual.historial', compact('seguimientos', 'solicitud'));
        }
    }

    public function verHistorial($solicitud_id)
    {
        $solicitud = Solicitud::find($solicitud_id);
        $seguimientos = $solicitud->seguimientos;
        return view('admin.historial.index', compact('seguimientos', 'solicitud_id'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seguimiento = new Seguimiento();

        if ($request->file('imagen') != null) {
            $imagen_producto = $request->file('imagen');
            $nombre_imagen = 'imagen_seguimiento' . time() . '.' . $imagen_producto->getClientOriginalExtension();
            $path = 'seguimiento/';
            $miniatura_path = 'seguimiento/miniatura/';

            // Verificar si los directorios existen o crearlos
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path, 0775, true);
            }
            if (!Storage::exists($miniatura_path)) {
                Storage::makeDirectory($miniatura_path, 0775, true);
            }

            // Guardar la imagen en el directorio correcto
            $imagen_producto->storeAs($path, $nombre_imagen, 'public');

            $seguimiento->imagen = $nombre_imagen;

            // Recortar imagen
            Image::fromFile(storage_path('app/public/' . $path . $nombre_imagen))
                ->autoRotate()
                ->resize(500, 500)
                ->format('webp')
                ->save(storage_path('app/public/' . $miniatura_path . $nombre_imagen));
        }

        $seguimiento->fecha = $request->fecha;
        $seguimiento->solicitud_id = $request->seguimiento_id;
        $seguimiento->save();

        $seguimientos = Seguimiento::where('solicitud_id', $request->seguimiento_id)->get();
        return view('admin.historial.tabla_historial', compact('seguimientos'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguimiento = Seguimiento::find($id);
        return response()->json($seguimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function actualizarSeguimiento(Request $request)
    {
        $seguimiento = Seguimiento::find($request->seguimiento_id);

        if ($request->file('imagen') != null) {
            File::delete(storage_path('app/public/seguimiento/' . $seguimiento->imagen));
            File::delete(storage_path('app/public/seguimiento/miniatura/' . $seguimiento->imagen));

            $imagen_producto = $request->file('imagen');
            $nombre_imagen = 'imagen_seguimiento' . time() . '.' . $imagen_producto->getClientOriginalExtension();
            $path = 'seguimiento/';
            $miniatura_path = 'seguimiento/miniatura/';

            // Verificar si los directorios existen o crearlos
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path, 0775, true);
            }
            if (!Storage::exists($miniatura_path)) {
                Storage::makeDirectory($miniatura_path, 0775, true);
            }

            // Guardar la imagen en el directorio correcto
            $imagen_producto->storeAs($path, $nombre_imagen, 'public');

            $seguimiento->imagen = $nombre_imagen;

            // Recortar imagen
            Image::fromFile(storage_path('app/public/' . $path . $nombre_imagen))
                ->autoRotate()
                ->resize(500, 500)
                ->format('png')
                ->save(storage_path('app/public/' . $miniatura_path . $nombre_imagen));
        }

        $seguimiento->fecha = $request->fecha;
        $seguimiento->save();

        $seguimientos = Seguimiento::where('solicitud_id', $seguimiento->Solicitud->id)->get();
        return view('admin.historial.tabla_historial', compact('seguimientos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seguimiento = Seguimiento::find($id);
        $seguimiento_id = $seguimiento->solicitud_id;
        File::delete(storage_path('app/public/seguimiento/' . $seguimiento->imagen));
        File::delete(storage_path('app/public/seguimiento/miniatura/' . $seguimiento->imagen));
        $seguimiento->delete();
        $seguimientos = Seguimiento::where('solicitud_id', $seguimiento_id)->get();
        return view('admin.historial.tabla_historial', compact('seguimientos'));
    }
}
