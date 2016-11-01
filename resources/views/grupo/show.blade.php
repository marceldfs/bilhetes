@extends('layout.app')

@section('content')
<div class="container mukheroHack3">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Descrição do Grupo</span></div>
    <div class="panel-body">
        <h4>{{ $grupo->descricao }}</h4>
    </div>
</div>
</div>
</div>
</div>
@stop