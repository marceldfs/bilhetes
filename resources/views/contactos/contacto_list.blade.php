@extends('layout.appMensagem')
@section('content')
<div class="container mukheroHack3">
@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<div class="row">
  <div class="col-md-8">
  	<div class="panel panel-default">
  		<div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Lista dos Seus Contactos </div>
<div class="table-scroll"> 		
<table class="table table-striped table-bordered back-color-white tg">
	<thead class="tg-yw4l">
		<tr>			
			<th>Nome</th>
			<th>Numero</th>
			{{--<th>Grupo</th>--}}
			<th colspan="2">Suas Operações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($contactos as $contacto => $value)
			<tr>
				<td>{{ $value->nome}}</td>
				<td>{{ $value->numero}}</td>
				{{--<td>{{ $value->grupo_id }}</td>--}}
				<td><a class="btn btn-small btn-success" href="{{ URL::to('evento/' . $value->id) }}">&nbsp;<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;</a></td>
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
</div>
	<div class="col-md-4">
		 <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Adicionar contacto</span></div>
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
			{!!Form::open(array('url'=>'contacto')) !!}
			<div class="form-group">
	                    	{{ Form::label('nome_lbl', 'Nome :',  ['class' => 'label-format pull-left','for' => 'nome' ])  }} 
	                    	{{ Form::text('nome',null,['class' => 'form-control ', 'id' => 'nome']) }}
	        </div>
	        <div class="form-group">
	                    	{{ Form::label('numero_lbl', 'Numero :',  ['class' => 'label-format pull-left','for' => 'numero' ])  }} 
	                    	{{ Form::text('numero',"+258",['class' => 'form-control ', 'id' => 'numero']) }}
	        </div>
	        <button type="submit" class="btn btn-success btn-lg pull-right" aria-label="Left Align">
  								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Guardar
			</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
</div>
@endsection