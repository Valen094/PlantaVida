<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Seguimiento extends Model
{
    

    // cada seguimiento se le pertenece a una solicitud
    public function Solicitud(){
        return $this->belongsTo('App\Solicitud');
    }

}
