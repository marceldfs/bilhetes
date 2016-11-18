<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
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
    public function index($id)
    {
        //
        $contactos_by_grupoID = Contacto::where('grupo_id',$id)->get();
        return \View::make('contactos.contacto_list')->with('contactos',$contactos_by_grupoID);
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
       $user = Auth::user();
       $contacto = new Contacto;
       $contacto->nome = Input::get('nome');
       //Este valor deve vir automaticamente do utilizador logado 
       //$contacto->grupo_id=$user->grupo_id;
       //$contacto->grupo_id=Input::get('grupo_id');
       $contacto->grupo_id=$user->grupo_id;
       $contacto->numero=Input::get('numero');

       $contacto->save();
       Session::flash('mensagem', 'Contacto Criado com Sucesso!');
       //return redirect()->action('ContactoController@index',['id'=>$user->grupo_id]);
       return redirect()->route('contactos', ['id' => $user->grupo_id]);      
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
        //
    }
}
