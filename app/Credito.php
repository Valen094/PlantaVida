<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $fillable = ['cuota','valor','fecha','pago'];

    //cada cuota de credito pertenece a una solicitud
    public function solicitud(){
        return $this->belongsTo('App\Solicitud');
    }
}
