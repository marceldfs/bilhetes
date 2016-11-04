@extends('layout.app')

@section('content')

<div class="container mukheroHack3">
@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Lista dos Seus Eventos </div>
<table class="table table-striped table-bordered back-color-white tg">
    <thead class="tg-yw4l">
        <tr>
            <th>ID</th>
            <th>Evento</th>
            <th>TipoBilhete</th>
            <th>Quantidade</th>
            <th>Bilhetes usados</th>
            <th>Cartaz</th>
            <th colspan="4">Suas Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bilhetes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->evento($value->evento_id)->nome }}</td>
            <td>{{ $value->tipoBilhete($value->tipo_bilhete_id)->descricao }}</td>
            <td>{{ $value->quantidade }}</td>
            <td>{{ $value->bilhetesUsados($value->evento_id,$value->tipo_bilhete_id) }}</td>
            <td><img src="{{ Storage::url($value->fundo,'public') }}" alt="Mountain View" style="width:304px;height:228px;"></td>
            <td>

                {{ Form::open(array('url' => 'bilhetes/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('&nbsp;X &nbsp;', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

            </td>
            <td>    
                <a class="btn btn-small btn-success" href="{{ URL::to('bilhete/' . $value->id) }}">&nbsp;<span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('bilhetes/' . $value->id . '/edit') }}">&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('bilhetes/clean/' . $value->id . '') }}">&nbsp;<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>&nbsp;</a>
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

