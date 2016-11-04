<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoTipoBilhete extends Model
{
    protected $table = 'evento_tipo_bilhete';
     
    public function evento($id)
    {
        return Evento::where('id', $id)->first();
    }
    
    public function tipoBilhete($id)
    {
        return TipoBilhete::where('id', $id)->first();
    }
    
    public function bilhetesUsados($evento_id,$tipo_bilhete_id)
    {
        return count(Bilhete::where('evento_id', $evento_id)->where('tipo_bilhete_id', $tipo_bilhete_id)->get()
                ->where('usado',1));
    }
}
