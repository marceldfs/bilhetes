@extends('layout.appMensagem')
@section('content')
<div class="container mukheroHack3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	 <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Editar Contacto</span></div>
            
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
                    {!!Form::model($evento, array('route'=>array('evento.update', $evento->id), 'method'=>'PUT')) !!}
	                    <div class="form-group">
	                    	{{ Form::label('nome_label', 'Nome :',  ['class' => 'label-format pull-left','for' => 'nome' ])  }} 
	                    	{{ Form::text('nome',null,['class' => 'form-control ', 'id' => 'nome']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('local_label', 'Local :',  ['class' => 'label-format pull-left','for' => 'local' ])  }} 
	                    	{{ Form::text('local',null,['class' => 'form-control ', 'id' => 'local']) }}
	                    </div>
  						<div class="form-group">
	                    	{{ Form::label('data_hora_label', 'Data e Hora :',  ['class' => 'label-format pull-left','for' => 'data_hora' ])  }} 
	                    	{{ Form::text('data_hora',null,['class' => 'form-control ', 'id' => 'data_hora']) }}
	                    </div>
	                     <div class="form-group">
	                    	{{ Form::label('descricao_label', 'Descrição "',  ['class' => 'label-format pull-left','for' => 'descricao' ])  }} 
	                    	{{ Form::textarea('descricao',null,['class' => 'form-control ', 'id' => 'descricao']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('grupo_id_label', 'Grupo :',  ['class' => 'label-format pull-left','for' => 'grupo_dropdown' ])  }} 
	                    	{!! Form::select('grupo_id',$grupos, null, ['class' => 'form-control ', 'id' => 'grupo_id']) !!}
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
