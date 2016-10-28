@extends('layout.app')

@section('content')

<div class="container mukheroHack1">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'bilhetes', 'method'=>'POST' , 'files'=>true)) }}

    <div class="form-group">
        {{ Form::label('evento', 'Evento') }}
        {{ Form::select('evento', $eventos, null, ['class' => 'form-control ', 'id' => 'evento']) }}
    </div>

    <div class="form-group">
        {{ Form::label('tipoBilhete', 'Tipo de Bilhetes') }}
        {{ Form::select('tipoBilhetes', $tipoBilhetes, null, ['class' => 'form-control ', 'id' => 'tipoBilhetes']) }}
    </div>

    <div class="form-group">
        {{ Form::label('quantidade', 'Quantidade') }}
        {{ Form::text('quantidade', Input::old('quantidade'), ['class' => 'form-control ', 'id' => 'quantidade']) }}
    </div>

    <div class="form-group">
        {{ Form::label('fundo', 'Cartaz') }}
        {{ Form::file('fundo', ['class' => 'form-control ', 'id' => 'fundo']) }}
    </div>
    
    {{ Form::submit('Gerar bilhetes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@stop