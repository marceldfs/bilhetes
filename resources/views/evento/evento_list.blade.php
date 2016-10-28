@extends('layout.app')
@section('content')
<div class="container mukheroHack2">
@if (Session::has('mensagem'))
    <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
@endif
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Grupo</td>
			<td>Nome</td>
			<td>Local</td>
			<td>Descricao</td>
			<td>data E Hora</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach($eventos as $evento => $value)
			<tr>
				<td>{{ $value->id  }}</td>
				<td>{{ $value->grupo_id  }}</td>
				<td>{{ $value->nome  }}</td>
				<td>{{ $value->local }}</td>
				<td>{{ $value->descricao }}</td>
				<td>{{ $value->data_hora }}</td>
				<td><a class="btn btn-small btn-info" href="{{ URL::to('evento/' . $value->id) }}">Visualizar</a></td>
				<td>
					 {{ Form::open(array('url' => 'evento/' . $value->id, 'class' => 'pull-right')) }}
                    	{{ Form::hidden('_method', 'DELETE') }}
                    	{{ Form::submit('Delete ', array('class' => 'btn btn-warning')) }}
                	{{ Form::close() }}
				</td>
			</tr>
			@endforeach
	</tbody>
</table>
</div>
@endsection