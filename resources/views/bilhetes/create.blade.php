@extends('layout.app')

@section('content')

<div class="container mukheroHack3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Gerar Bilhetes</span></div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel-body">
{{ Form::open(array('url' => 'bilhetes', 'method'=>'POST' , 'files'=>true)) }}

    <div class="form-group">
        {{ Form::label('evento', 'Evento:',['class' => 'label-format pull-left' ]) }}
        {{ Form::select('evento', $eventos, null, ['class' => 'form-control ', 'id' => 'evento']) }}
    </div>

    <div class="form-group">
        {{ Form::label('tipoBilhete', 'Tipo de Bilhetes:',['class' => 'label-format pull-left' ]) }}
        {{ Form::select('tipoBilhetes', $tipoBilhetes, null, ['class' => 'form-control ', 'id' => 'tipoBilhetes']) }}
    </div>

    <div class="form-group">
        {{ Form::label('quantidade', 'Quantidade:',['class' => 'label-format pull-left' ]) }}
        {{ Form::text('quantidade', Input::old('quantidade'), ['class' => 'form-control ', 'id' => 'quantidade']) }}
    </div>

    <div class="form-group">
        {{ Form::label('fundo', 'Cartaz :',['class' => 'label-format pull-left' ]) }}
        {{ Form::file('fundo', ['class' => 'form-control ', 'id' => 'fundo']) }}
    </div>
    
    <button type="submit" class="btn btn-success btn-lg pull-right" aria-label="Left Align">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;
                            </button>

{{ Form::close() }}
</div>
</div>
</div>
</div>
</div>
@stop