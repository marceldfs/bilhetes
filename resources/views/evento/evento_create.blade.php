@extends('layout.app')
@section('content')
<div class="container mukheroHack3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Criando novo evento</span></div>
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
                    {!!Form::open(array('url'=>'evento')) !!}
	                    <div class="form-group">
	                    	{{ Form::label('nome', 'Nome :',  ['class' => 'label-format pull-left','for' => 'nome_text' ])  }} 
	                    	{{ Form::text('nome_text',null,['class' => 'form-control ', 'id' => 'nome_text']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('local', 'Local :',  ['class' => 'label-format pull-left','for' => 'local_text' ])  }} 
	                    	{{ Form::text('local_text',null,['class' => 'form-control ', 'id' => 'local_text']) }}
	                    </div>
  						<div class="form-group">
	                    	{{ Form::label('data_hora', 'Data e Hora :',  ['class' => 'label-format pull-left','for' => 'data_hora_text' ])  }} 
	                    	{{ Form::text('data_hora_text',null,['class' => 'form-control ', 'id' => 'data_hora_text']) }}
	                    </div>
	                     <div class="form-group">
	                    	{{ Form::label('descricao', 'Descricao :',  ['class' => 'label-format pull-left','for' => 'descricao_text' ])  }} 
	                    	{{ Form::textarea('descricao_text',null,['class' => 'form-control ', 'id' => 'descricao_text']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('grupo_id', 'Grupo :',  ['class' => 'label-format pull-left','for' => 'grupo_dropdown' ])  }} 
	                    	{!! Form::select('grupo_dropdown',$grupos, null, ['class' => 'form-control ', 'id' => 'grupo_dropdown']) !!}
	                   </div>
	                   <div>
	                   		<button type="submit" class="btn btn-success btn-lg pull-right" aria-label="Left Align">
  								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;
							</button>
	                   </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
<script src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>

<script type="text/javascript">
$('#data_hora_text').datetimepicker();
</script>
@endsection
