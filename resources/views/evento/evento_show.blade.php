@extends('layout.app')
@section('content')
<div class="container mukheroHack3">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Visualizar evento</span></div>
                <div class="panel-body">
                    {!!Form::open(array('url'=>'evento')) !!}
	                    <div class="form-group">
	                    	{{ Form::label('nome', 'Nome',  ['class' => 'label-format pull-left','for' => 'nome_text' ])  }} 
	                    	{{ Form::text('nome_text',$evento->nome,['class' => 'form-control ', 'id' => 'nome_text','readonly']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('local', 'Local',  ['class' => 'label-format pull-left','for' => 'local_text' ])  }} 
	                    	{{ Form::text('local_text',$evento->local,['class' => 'form-control ', 'id' => 'local_text','readonly']) }}
	                    </div>
  						<div class="form-group">
	                    	{{ Form::label('data_hora', 'Data e Hora',  ['class' => 'label-format pull-left','for' => 'data_hora_text' ])  }} 
	                    	{{ Form::text('data_hora_text',$evento->data_hora,['class' => 'form-control ', 'id' => 'data_hora_text','readonly']) }}
	                    </div>
	                     <div class="form-group">
	                    	{{ Form::label('descricao', 'Descricao',  ['class' => 'label-format pull-left','for' => 'descricao_text' ])  }} 
	                    	{{ Form::textarea('descricao_text',$evento->descricao,['class' => 'form-control ', 'id' => 'descricao_text','readonly']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('grupo_id', 'Grupo',  ['class' => 'label-format pull-left','for' => 'grupo_dropdown' ])  }} 
	                 		{{ Form::text('grupo_dropdown',$evento->grupo_id,['class' => 'form-control ', 'id' => 'grupo_dropdown','readonly']) }}
	                   </div>
	                   <div>
	                   	    <a class="btn btn-small btn-info" href="{{ URL::to('evento/' . $evento->id . '/edit') }}">Editar</a>
	                   		 
	                   </div>
	                   <div>
	                   		{!!Form::submit('Ver Bilhetes',['class' => 'btn btn-success pull-right']); !!}
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
