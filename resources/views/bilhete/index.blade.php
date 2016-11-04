@extends('layout.app')
@section('content')
<div class="container mukheroHack3">

@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
<div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Lista dos Bilhetes </div>
<table id="lista-bilhetes" class="table table-striped table-bordered back-color-white tg">
    <thead class="tg-yw4l">
        <tr>
            <th>ID</th>
            <th>Evento</th>
            <th>TipoBilhete</th>
            <th>Usado</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bilhetes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->evento($value->evento_id)->nome }}</td>
            <td>{{ $value->tipoBilhete($value->tipo_bilhete_id)->descricao }}</td>
            <td>
                @if ($value->usado==1)
                    Sim
                @else
                    Nao
                @endif
            </td>
            <td>
                
                <a class="btn btn-small btn-success" href="{{ URL::to('bilhete/showTicket/' . $value->chave) }}">&nbsp;<span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;</a>
                
                <a class="btn btn-small btn-success" href="whatsapp://send?text={{ URL::to('bilhete/showTicket/' . $value->chave) }}" data-action="share/whatsapp/share">&nbsp;<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;</a>
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#lista-bilhetes').DataTable();
} );
</script>
</div>
</div>
</div>
</div>
@endsection

