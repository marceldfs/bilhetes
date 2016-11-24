@extends('layout.appMensagem')

@section('content')
<div class="container mukheroHack3">
@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<div class="row">
  <div class="col-md-8">
  	<div class="panel panel-default">
  		<div class="panel-heading panel-red-heading"><span class="text-white-color-legend">
  			Lista de grupos 
  		</div>
<table id="tabelaContactos" class="table table-striped table-bordered back-color-white tg display">
	<thead class="tg-yw4l">
		<tr>
			<th>Nome</th>
			<th>Contactos</th>
			<th>Editar</th>
			<th>Remover</th>
		</tr>
	</thead>
	<tbody>
		@foreach($gruposenvio as $grupo => $value)
			<tr>
				<td>{{ $value->nome}}</td>
				<td><a class="btn btn-small btn-success" href="{{ URL::to('contacto/' . $value->id) }}">&nbsp;<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;</a></td>				
				<td>
				</td>
				<td>
					 {{ Form::open(array('url' => 'evento/' . $value->id, 'class' => 'pull-right')) }}
                    	{{ Form::hidden('_method', 'DELETE') }}
                    	{{ Form::submit('&nbsp;X &nbsp;', array('class' => 'btn btn-warning')) }}
                	{{ Form::close() }}
				</td>
			</tr>
			@endforeach
	</tbody>
</table>
</div>
</div>
	<div class="col-md-4">
		 <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Adicionar Grupo de Contactos</span></div>
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
			{!!Form::open(array('url'=>'grupoenvio')) !!}
			<div class="form-group">
	                    	{{ Form::label('nome_lbl', 'Nome :',  ['class' => 'label-format pull-left','for' => 'nome' ])  }} 
	                    	{{ Form::text('nome',null,['class' => 'form-control ', 'id' => 'nome']) }}
	        </div>	        
	        <button type="submit" class="btn btn-success btn-lg pull-right" aria-label="Left Align">
  								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Guardar
			</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function() {
    $('#tabelaContactos').DataTable( {
        "scrollY":        "200px",
	        "scrollCollapse": true,
	        "paging":         false
    } );
} );
</script>

@endsection
