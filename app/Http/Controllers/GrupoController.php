<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Grupo;
use Illuminate\Support\Facades\View;

class GrupoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $grupos = Grupo::all();
        return View::make('grupo.index')
            ->with('grupos', $grupos);
    }

    public function create()
    {
        return \View::make('grupo.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'descricao' => 'required',
       ]);
        
        $grupo = new Grupo;
        $grupo->descricao = $request->descricao;
        $grupo->save();
        
        $request->session()->flash('mensagem', 'Grupo salvado com sucesso!');
        return redirect('grupo');
    }

    public function show($id)
    {
        $grupo = Grupo::find($id);

        return View::make('grupo.show')
            ->with('grupo', $grupo);
    }

    public function edit($id)
    {
        $grupo = Grupo::find($id);

        return View::make('grupo.edit')
            ->with('grupo', $grupo);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'descricao' => 'required',
        ]);
        
        $grupo = Grupo::find($id);
        $grupo->descricao = $request->descricao;
        $grupo->save();

        $request->session()->flash('mensagem', 'Grupo actualizado com sucesso!');
        return redirect('grupo');
    }
    
    public function destroy(Request $request, $id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
        
        $request->session()->flash('mensagem', 'Grupo apagado com sucesso!');
        return redirect('grupo');
    }
}
