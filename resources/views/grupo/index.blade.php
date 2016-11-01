@extends('layout.app')

@section('content')
    
<div class="container mukheroHack3 back-color-white">
    <br/>
<a href="{{ URL::to('grupo/create') }}" class="btn btn-primary">Criar grupo</a>


@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Lista de Grupos</div>
<table class="table table-striped table-bordered back-color-white tg">
    <thead class="tg-yw4l">
        <tr>
            <th>ID</th>
            <th>Descricao</th>
            <th colspan="3">Suas Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($grupos as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->descricao }}</td>
            <td>

                {{ Form::open(array('url' => 'grupo/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('&nbsp;X &nbsp;', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
             </td>
             <td> 
                <a class="btn btn-small btn-success pull-right"  href="{{ URL::to('grupo/' . $value->id) }}">&nbsp;<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;</a>
             </td>
             <td>   
                <a class="btn btn-small btn-info pull-right" href="{{ URL::to('grupo/' . $value->id . '/edit') }}">&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
@stop

