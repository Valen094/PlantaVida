<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{

    protected $table="solicitudes";

    protected $fillable = [
        'solicitante', 'nombre_apellido', 'identificacion','direccion','telefono','correo_electronico','motivo',
        'razon_social','nit','dirigido','direccion_beneficiario','telefono_beneficiario','telefono_beneficiario', 
        'municipio_beneficiario','departamento_beneficiario','departamento','municipio','correo_beneficiario','medio_pago',
        'observaciones','trato','manifestacion','identificacion_facturar','nombre_facturar','correo_facturar','direccion_facturar',
        'telefono_facturar','ciudad_facturar','politicas','trato_donante','cantidad_arboles','fecha_expedicion'
    ];

    // Una solicitud puede tener varias cuotas de credito en este caso son solo dos
    public function cuotas_credito(){
        return $this->hasMany('App\Credito','solicitud_id');
    }

    // una gestion pertenece al usuario que la hizo
    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function seguimientos(){
        return $this->hasMany('App\Seguimiento','solicitud_id');
    }

    // cada solicitud puede tener un arbol asignado
    public function arbol(){
        return $this->belongsTo('App\Arbol');
    }

}
