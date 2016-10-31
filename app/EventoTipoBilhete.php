<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoTipoBilhete extends Model
{
    //
     protected $table = 'evento_tipo_bilhete';
     
    public function evento($id)
    {
        return Evento::where('id', $id)->first();
    }
    
    public function tipoBilhete($id)
    {
        return TipoBilhete::where('id', $id)->first();
    }
}
