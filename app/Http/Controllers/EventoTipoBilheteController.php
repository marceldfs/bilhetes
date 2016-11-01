<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Evento;
use App\TipoBilhete;
use App\EventoTipoBilhete;
use App\Bilhete;

class EventoTipoBilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bilhetes = EventoTipoBilhete::all();
        return \View::make('bilhetes.index')
            ->with('bilhetes', $bilhetes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Evento::pluck('nome', 'id');
        $tipoBilhetes = TipoBilhete::pluck('descricao', 'id');
        return \View::make('bilhetes.create')
                ->with('eventos', $eventos)
                ->with('tipoBilhetes', $tipoBilhetes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'quantidade' => 'required|integer',
        ]);
        
        $eventoTipoBilhete = new EventoTipoBilhete;
        $eventoTipoBilhete->evento_id = $request->input('evento');
        $eventoTipoBilhete->tipo_bilhete_id = $request->input('tipoBilhetes');
        $eventoTipoBilhete->quantidade = $request->quantidade;
        $eventoTipoBilhete->fundo = $request->file('fundo')->store('fundos');
        $eventoTipoBilhete->save();
        $this->generateBilhetes($eventoTipoBilhete);
        
        $request->session()->flash('mensagem', 'Bilhetes gerados com sucesso!');
        return redirect('bilhetes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $eventos = Evento::pluck('nome', 'id');
        $tipoBilhetes = TipoBilhete::pluck('descricao', 'id');      
        $eventoTipoBilhete = EventoTipoBilhete::find($id);

        return \View::make('bilhetes.edit')
            ->with('eventoTipoBilhete', $eventoTipoBilhete)
            ->with('eventos', $eventos)
            ->with('tipoBilhetes', $tipoBilhetes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventoTipoBilhete = EventoTipoBilhete::find($id);
        
        $this->validate($request, [
           'quantidade' => 'required|integer|min:'.$eventoTipoBilhete->quantidade,
        ]);
        
        $eventoTipoBilhete->evento_id = $request->input('evento');
        $eventoTipoBilhete->tipo_bilhete_id = $request->input('tipoBilhetes');
        $eventoTipoBilhete->quantidade = $request->quantidade;
        
        if($request->file('fundo')!=null)
        {
            Storage::delete($eventoTipoBilhete->fundo);
            $eventoTipoBilhete->fundo = $request->file('fundo')->store('fundos');
        }
        $eventoTipoBilhete->save();
        $this->generateBilhetes($eventoTipoBilhete);

        $request->session()->flash('mensagem', 'Bilhetes actualizados com sucesso!');
        return redirect('bilhetes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    private function generateBilhetes(EventoTipoBilhete $eventoTipoBilhete)
    {
        $bilhetesGerados = count(Bilhete::where('evento_id',$eventoTipoBilhete->evento_id)
                ->where('tipo_bilhete_id',$eventoTipoBilhete->tipo_bilhete_id)->get());
        for($i=$bilhetesGerados;$i<$eventoTipoBilhete->quantidade;$i++)
        {
            $bilhete = new Bilhete;
            $bilhete->evento_id = $eventoTipoBilhete->evento_id;
            $bilhete->tipo_bilhete_id = $eventoTipoBilhete->tipo_bilhete_id;
            $bilhete->chave = rand(5,15).'-'.$i.'-'.$bilhete->evento_id.'-'.$bilhete->tipo_bilhete_id;
            $bilhete->usado = 0;
            $bilhete->save();
        }
    }
}
