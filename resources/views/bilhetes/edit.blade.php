
@extends('layout.app')

@section('content')

<div class="container mukheroHack1">
<h1>Editar {{ $eventoTipoBilhete->evento($eventoTipoBilhete->evento_id)->nome }}</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::model($eventoTipoBilhete, array('route' => array('bilhetes.update', $eventoTipoBilhete->id), 'method' => 'PUT', 'files'=>true)) }}

    <div class="form-group">
        {{ Form::label('evento', 'Evento') }}
        {{ Form::select('evento', $eventos, $eventoTipoBilhete->evento_id, ['class' => 'form-control ', 'id' => 'evento']) }}
    </div>

    <div class="form-group">
        {{ Form::label('tipoBilhete', 'Tipo de Bilhetes') }}
        {{ Form::select('tipoBilhetes', $tipoBilhetes, $eventoTipoBilhete->tipo_bilhete_id, ['class' => 'form-control ', 'id' => 'tipoBilhetes']) }}
    </div>

    <div class="form-group">
        {{ Form::label('quantidade', 'Quantidade') }}
        {{ Form::text('quantidade', $eventoTipoBilhete->quantidade, ['class' => 'form-control ', 'id' => 'quantidade']) }}
    </div>

    <div class="form-group">
        {{ Form::label('fundo', 'Cartaz') }}<br>
        <img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($eventoTipoBilhete->fundo)) }}" alt="Mountain View" style="width:304px;height:228px;">
        {{ Form::file('fundo', ['class' => 'form-control ', 'id' => 'fundo']) }}
    </div>

    {{ Form::submit('Editar bilhetes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
