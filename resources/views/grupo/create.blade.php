@extends('layout.app')

@section('content')

<div class="container mukheroHack3 ">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Criando novo Grupo</span></div>
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
{{ Form::open(array('url' => 'grupo')) }}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao',['class' => 'label label-format','for' => 'nome_text' ]) }}
        {{ Form::textarea('descricao', Input::old('descricao'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">

    <button type="submit" class="btn btn-success btn-lg pull-right" aria-label="Left Align">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;
    </button>
</div>
</div>
{{ Form::close() }}
</div>
</div>
</div>
</div>

@stop