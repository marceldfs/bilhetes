@extends('layout.app')
@section('content')
<div class="container mukheroHack3">
    @if (Session::has('mensagem'))
        <div class="alert alert-info"><h2>{{ Session::get('mensagem') }}</h2></div>
    @endif
</div>
@endsection

