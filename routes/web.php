<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'SolicitudController');
Route::resource('solicitud', 'SolicitudController');
Route::get('buscar_seguimiento/{solicitud_id}','HistorialController@consultarHistorial')->name('buscar_seguimiento');
Route::get('detalle_seguimiento','HistorialController@detalleSeguimeinto')->name('detalle_seguimiento');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('generar_pdf/{solicitud_id}','BonoPdfController@generarPdf')->name('generar_pdf');

    Route::resource('historial','HistorialController');
    Route::resource('usuarios','UserController');

    Route::post('actualizar_usuario','UserController@actualizarUsuario')->name('actualizar_usuario');

    Route::get('ver_historial/{solicitud_id}','HistorialController@verHistorial')->name('ver_historial');
    Route::get('ver_carta/{solicitud_id}','BonoPdfController@generarCarta')->name('ver_carta');

    
    Route::resource('registrar_bono','RegistroController');
    Route::post('actualizar_solicitud','SolicitudController@actualizarSolicitud')->name('actualizar_solicitud');
    Route::get('pago_verificado/{solicitud_id}/{respuesta_estado}/','SolicitudController@pagoVerificado')->name('pago_verificado');


    Route::get('estado_solicitud/{solicitud_id}/{respuesta_pago}/','SolicitudController@estado')->name('estado_solicitud');
    Route::post('actualizar_seguimiento','HistorialController@actualizarSeguimiento')->name('actualizar_seguimiento');

    // Ruta para agregar un Arbolito a la solicitud 
    Route::get('agregar_arbol/{arbol_id}/','SolicitudController@agregarArbol')->name('agregar_arbol');
    Route::get('arbol_reporte/{arbol_id}/','SolicitudController@arbolReporte')->name('arbol_reporte');
    
    Route::resource('aporte','BonoAporteController');
    Route::post('actualizar_bono_aporte','BonoAporteController@actualizarAporte')->name('actualizar_bono_aporte');
    Route::get('ver_certificado/{solicitud_id}','BonoPdfController@generarCertificado')->name('ver_certificado');
    Route::get('bono_lanzamiento','SolicitudController@bonoLanzamiento')->name('bono_lanzamiento');

    // RUTA PARA EL REPORTE GENERAL DE LOS BONOS
    Route::get('reporte_general','SolicitudController@reporteGeneral')->name('reporte_general');

 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
