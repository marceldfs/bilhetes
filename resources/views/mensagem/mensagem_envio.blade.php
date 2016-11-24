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
  			Lista dos Seus Contactos 
  		</div>
<table id="tabelaContactos" class="table table-striped table-bordered back-color-white tg display">
	<thead class="tg-yw4l">
		<tr>		
			<th></th>	
			<th>Nome</th>
			<th class="hide"></th>	
					
		</tr>
	</thead>
	<tbody>
		@foreach($contactos as $grupo => $value)
			<tr>
				<td></td>
				<td>{{ $value->nome}}</td>
				<td class="hide">{{$value->id}}</td>
			</tr>
			@endforeach
	</tbody>
</table>
</div>

</div>
	<div class="col-md-4">
		 <div class="panel-heading panel-red-heading"><span class="text-white-color-legend">Enviar Mensagem</span></div>
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
			
			 <div class="form-group">
	                    	{{ Form::label('lbl', 'Selecione os numeros na Tabela',  ['class' => 'label-format pull-left'])  }} 
	        </div>
	        <div class="form-group">
	                    	{{ Form::label('numero_lbl', 'Mensagem :',  ['class' => 'label-format pull-left','for' => 'numeroT' ])  }} 
	                    	{{ Form::textArea('mensagem',null,['class' => 'form-control ', 'id' => 'mensagem']) }}
	        </div>	   
			<a  id="enviar" class="btn btn-success btn-lg pull-right" aria-label="Left Align">Enviar SMS <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;</a>
		</div>
		<div id="teste">
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function() {
    $('#tabelaContactos').DataTable( {
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'multi',
            selector: 'td:first-child',
            className: 'selected'
        },
        order: [[ 1, 'asc' ]],

        "scrollY":        "200px",
	        "scrollCollapse": true,
	        "paging":         false
    } );

 
 
$('#enviar').click(function(e){
	e.preventDefault();

	var table = $('#tabelaContactos').DataTable();	
	var rows = $('tr.selected');
	var rowData =  table.rows(rows).data();

	var dataArr = [];
	$.each($(rowData),function(key,value){	
		//getting the 3 column 
		dataArr.push(value[2]);

	});
	//pegar a mensagem
	var sms = $('#mensagem').val();
	
	 var formData = {
         
                    grupos: dataArr,
                    mensagem:sms,
                } 

        

	$.ajax({
		type:'GET',
        url:'createMessage',
        data: formData,
        dataType: "json",
		success:function(msg)
		{
			console.log(msg);
			$("#mensagem").text(msg.msg);
		},
		 error: function (textStatus, errorThrown) {
                console.log(errorThrown);
                console.log(textStatus);
            }
	});

});
});

</script>

@endsection