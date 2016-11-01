@extends('layout.app')

@section('content')

<div class="container mukheroHack3 back-color-white">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'grupo')) }}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao',['class' => 'label label-format','for' => 'nome_text' ]) }}
        {{ Form::textarea('descricao', Input::old('descricao'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Criar grupo', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@stop