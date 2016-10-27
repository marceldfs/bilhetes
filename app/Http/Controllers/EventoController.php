<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evento;
use App\Grupo;
use Input;
use Session;
use Redirect;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $eventos = Evento::all();

        // chamar a pagina 
        return \View::make('evento.evento_list')
        ->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get list grupo 
        $grupos = Grupo::pluck('descricao','id');
        return \View::make('evento.evento_create') 
        ->with('grupos',$grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nome_text' => 'required|min:3',
            'local_text' => 'required|min:3',
            'data_hora_text' => 'required',
            'descricao_text'=>'required|min:5',
            'grupo_dropdown'=>'required',
            ]
            );

        //
        $evento = new Evento; 
        $evento->grupo_id = Input::get('grupo_dropdown');
        $evento->nome = Input::get('nome_text');
        $evento->local = Input::get('local_text');
        $evento->descricao = Input::get('descricao_text');
        $evento->data_hora = Input::get('data_hora_text');
        $evento->save();

        //Session::flash('message', 'Successfully created!');
        return Redirect::to('evento');
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
        $evento = Evento::find($id);

        return \View::make('evento.evento_show')->with('evento',$evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
