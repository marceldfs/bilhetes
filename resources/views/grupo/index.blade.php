@extends('layout.app')

@section('content')

<div class="container mukheroHack1">
<a href="{{ URL::to('grupo/create') }}">Criar grupo</a>

@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Descricao</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($grupos as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->descricao }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('grupo/' . $value->id) }}">Visualizar grupo</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('grupo/' . $value->id . '/edit') }}">Editar grupo</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@stop

