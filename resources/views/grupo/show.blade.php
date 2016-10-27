@extends('layout.app')

@section('content')
<div class="container mukheroHack1">

<h1>Showing {{ $grupo->descricao }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $grupo->descricao }}</h2>
    </div>

</div>
@stop