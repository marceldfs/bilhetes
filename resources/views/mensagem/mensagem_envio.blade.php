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
					Envio de SMS 
				</div>
			</div>
			<div class="panel-body">
				{!!Form::open(array('url'=>'evento')) !!}
				  	<div class="form-group">
	                    {{ Form::label('descricao', 'Descricao :',  ['class' => 'label-format pull-left','for' => 'descricao_text' ])  }} 
	                    {{ Form::textarea('descricao_text',null,['class' => 'form-control ', 'id' => 'descricao_text']) }}
	                </div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection