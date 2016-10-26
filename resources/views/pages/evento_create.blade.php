@extends('layout.app')
@section('content')
<div class="container mukheroHack2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criando novo evento</div>

                <div class="panel-body">
                    {{Html::ul($errors->all())}}
                    {!!Form::open(array('url'=>'evento')) !!}
	                    <div class="form-group">
	                    	{{ Form::label('nome', 'Nome',  ['class' => 'label label-default','for' => 'nome_text' ])  }} 
	                    	{{ Form::text('nome_text',null,['class' => 'form-control ', 'id' => 'nome_text']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('local', 'Local',  ['class' => 'label label-default','for' => 'local_text' ])  }} 
	                    	{{ Form::text('local_text',null,['class' => 'form-control ', 'id' => 'local_text']) }}
	                    </div>
	                     <div class="form-group">
	                    	{{ Form::label('descricao', 'Descricao',  ['class' => 'label label-default','for' => 'descricao_text' ])  }} 
	                    	{{ Form::textarea('descricao_text',null,['class' => 'form-control ', 'id' => 'descricao_text']) }}
	                    </div>
	                    <div class="form-group">
	                    	{{ Form::label('grupo_id', 'Grupo',  ['class' => 'label label-default','for' => 'grupo_dropdown' ])  }} 
	                    	{!! Form::select('bancometical',$grupos, null, ['class' => 'form-control ', 'id' => 'bancometical']) !!}
	                   </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
