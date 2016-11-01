<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    protected $table = 'bilhete';
     
    public function evento($id)
    {
        return Evento::where('id', $id)->first();
    }
    
    public function tipoBilhete($id)
    {
        return TipoBilhete::where('id', $id)->first();
    }
}
