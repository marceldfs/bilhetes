@extends('layout.app')

@section('content')
    
<div class="container mukheroHack3 back-color-white">
    <br/>
<a href="{{ URL::to('grupo/create') }}" class="btn btn-primary">Criar grupo</a>


@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Descricao</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($grupos as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->descricao }}</td>
            <td>

                {{ Form::open(array('url' => 'grupo/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Apagar', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
              
                <a class="btn btn-small btn-success pull-right"  href="{{ URL::to('grupo/' . $value->id) }}">Visualizar</a>
                <a class="btn btn-small btn-info pull-right" href="{{ URL::to('grupo/' . $value->id . '/edit') }}">Editar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@stop

