@extends('layout.app')
@section('content')
<div class="container mukheroHack2">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando o evento</div>
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
	                    	{{ Form::label('nome_label', 'Nome',  ['class' => 'label label-default','for' => 'nome' ])  }} 
	                    	{{ Form::text('nome',null,['class' => 'form-control ', 'id' => 'nome']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('local_label', 'Local',  ['class' => 'label label-default','for' => 'local' ])  }} 
	                    	{{ Form::text('local',null,['class' => 'form-control ', 'id' => 'local']) }}
	                    </div>
  						<div class="form-group">
	                    	{{ Form::label('data_hora_label', 'Data e Hora',  ['class' => 'label label-default','for' => 'data_hora' ])  }} 
	                    	{{ Form::text('data_hora',null,['class' => 'form-control ', 'id' => 'data_hora']) }}
	                    </div>
	                     <div class="form-group">
	                    	{{ Form::label('descricao_label', 'Descricao',  ['class' => 'label label-default','for' => 'descricao' ])  }} 
	                    	{{ Form::textarea('descricao',null,['class' => 'form-control ', 'id' => 'descricao']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('grupo_id_label', 'Grupo',  ['class' => 'label label-default','for' => 'grupo_dropdown' ])  }} 
	                    	{!! Form::select('grupo_id',$grupos, null, ['class' => 'form-control ', 'id' => 'grupo_id']) !!}
	                   </div>
	                   <div>
	                   		{!!Form::submit('Confirmar',['class' => 'btn btn-success pull-right']); !!}
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
