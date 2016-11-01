
@extends('layout.app')

@section('content')

<div class="container mukheroHack3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">EDITAR GRUPO - {{ $grupo->descricao }}</span></div>
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
{{ Form::model($grupo, array('route' => array('grupo.update', $grupo->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', null, array('class' => 'form-control')) }}
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
