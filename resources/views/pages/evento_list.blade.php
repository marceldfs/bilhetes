@extends('layout')

@section('content')
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Grupo</td>
			<td>Nome</td>
			<td>Local</td>
			<td>Descricao</td>
			<td>data_Hora</td>
			<td>Create at</td>
			<td>Update at</td>
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
				<td>{{ $value->created_at }}</td>
				<td>{{ $value->updated_at}}</td>
			</tr>
			@endforeach
	</tbody>
</table>
@endsection