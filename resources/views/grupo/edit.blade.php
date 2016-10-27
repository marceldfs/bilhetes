
@extends('layout.app')

@section('content')

<div class="container mukheroHack1">
<h1>Editar {{ $grupo->descricao }}</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::model($grupo, array('route' => array('grupo.update', $grupo->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Editar grupo', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
