<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\TipoBilhete;
use App\EventoTipoBilhete;
use App\Bilhete;

class BilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $eventoTipoBilhete = EventoTipoBilhete::find($id);
        $bilhetes = Bilhete::where('evento_id',$eventoTipoBilhete->evento_id)
                ->where('tipo_bilhete_id',$eventoTipoBilhete->tipo_bilhete_id)->get();
        return \View::make('bilhete.index')
            ->with('bilhetes', $bilhetes);
    }
    
    public function showPdf($chave)
    {
        $basePath = "http://localhost:8000/";
        $path = $basePath."bilhete/readTicket/";
        $bilhete = Bilhete::where('chave',$chave)->first();
        $evento = $bilhete->evento($bilhete->evento_id);
        $tipoBilhete = $bilhete->tipoBilhete($bilhete->tipo_bilhete_id);
        $eventoTipoBilhete = EventoTipoBilhete::where('evento_id',$evento->id)->where('tipo_bilhete_id',$tipoBilhete->id)->first();
        $pdf = \App::make('dompdf.wrapper');
        $html = "<body>";
        $html = $html."<style>body { margin: 0px; }html { margin: 0px}</style>";
        $html = $html."<style>body{background-image:url('".\Storage::url($eventoTipoBilhete->fundo,'public')."');}</style>";
        $html = $html."<img src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=".$path.$chave."&choe=UTF-8' title='Link to ticket' />";
        $html = $html."</body>";
        $pdf->loadHTML($html)->setPaper('a4', $eventoTipoBilhete->orientacao);//->setWarnings('true');
        return $pdf->download('ticket_'.$tipoBilhete->descricao.'_'.$evento->nome.'.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read($chave)
    {
        
    }
}
