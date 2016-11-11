@extends('layout.app3')

@section('content')
<div class="container">
	<div class="row">		
		  <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading panel-red-heading">
                       <h4><span class=" glyphicon glyphicon-bookmark text-white-color-legend">Gerir Bilhetes</span></h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="/evento/create" class="btn btn-default">Seguir</a>
                    </div>
                </div>
            </div>
			<div id="logoFade" class="col-md-4 divHide">
			            <figure>
			            	<a href="#"><img src="image/logo.png" alt=""></a> 
			        	</figure>  
			        	 <h4 class="text-white-color">Mukhero ICT - Soluções para sua empresa</h4> 
			</div>
              <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading panel-red-heading">
                     <h4><span class="glyphicon glyphicon-envelope text-white-color-legend">Gerir Mensagens</span></h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Seguir</a>
                    </div>
                </div>
            </div>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function()
		{
			$("#logoFade").fadeIn(3000).removeClass('divHide');
		});
</script>
@stop
