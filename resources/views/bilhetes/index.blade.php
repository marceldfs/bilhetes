@extends('layout.app')

@section('content')

<div class="container mukheroHack1">
<a href="{{ URL::to('bilhetes/create') }}">Gerar bilhetes</a>

@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Evento</td>
            <td>TipoBilhete</td>
            <td>Quantidade</td>
            <td>Cartaz</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($bilhetes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->evento($value->evento_id)->nome }}</td>
            <td>{{ $value->tipoBilhete($value->tipo_bilhete_id)->descricao }}</td>
            <td>{{ $value->quantidade }}</td>
            <td><img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($value->fundo)) }}" alt="Mountain View" style="width:304px;height:228px;"></td>
            <td>

                {{ Form::open(array('url' => 'bilhetes/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Apagar', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                
                <a class="btn btn-small btn-success" href="{{ URL::to('bilhetes/' . $value->id) }}">Visualizar</a>

                <a class="btn btn-small btn-info" href="{{ URL::to('bilhetes/' . $value->id . '/edit') }}">Editar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@stop

