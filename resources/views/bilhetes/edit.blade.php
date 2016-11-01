@extends('layout.app')
@section('content')

<div class="container mukheroHack3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">EDITAR - {{ $eventoTipoBilhete->evento($eventoTipoBilhete->evento_id)->nome  }}</span></div>
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
        {{ Form::label('orientacao', 'Orientacao do cartaz :') }}
        {{ Form::select('orientacao', ['landscape' => 'Landscape', 'portrait' => 'Portrait'], $eventoTipoBilhete->orientacao, ['class' => 'form-control ', 'id' => 'orientacao']) }}
    </div>

    <div class="form-group">
        {{ Form::label('fundo', 'Cartaz') }}<br>
        <img src="{{ Storage::url($eventoTipoBilhete->fundo,'public') }}" alt="Mountain View" style="width:304px;height:228px;">
        {{ Form::file('fundo', ['class' => 'form-control ', 'id' => 'fundo']) }}
    </div>

    {{ Form::submit('Editar bilhetes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
</div>
</div>
</div>
</div>
