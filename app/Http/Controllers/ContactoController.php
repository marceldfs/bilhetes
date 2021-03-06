<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\GrupoEnvio;
use Input;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;

class ContactoController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Para mostrar a pagina inicial de cada modulo
    */
    public function home()
    {
        return \View::make('mensagem.mensagem_home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($grupoenvio_id)
    {   
        $grupo = GrupoEnvio::find($grupoenvio_id);
        $contactos_by_grupoenvio_id = Contacto::where('grupoenvio_id',$grupoenvio_id)->get();        
        return \View::make('contactos.contacto_list')->with('contactos',$contactos_by_grupoenvio_id)->with('grupo',$grupo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'numero'=>'required|min:13',
            'nome'=>'required|min:3'
            ]);
        //       
       $contacto = new Contacto;
       $contacto->nome = Input::get('nome');
       $contacto->grupoenvio_id = Input::get('grupoenvio_id');
       $contacto->numero=Input::get('numero');

       $contacto->save();
       Session::flash('mensagem', 'Contacto Criado com Sucesso!');
       
       return redirect()->route('contactos', ['id' => $contacto->grupoenvio_id]);      
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
        $contacto = Contacto::find($id);
        $contacto->delete();
        Session::flash('mensagem', 'Contacto Removido Com Sucesso!');
        return redirect()->route('contactos', ['id' => $contacto->grupoenvio_id]);  
    }
}
