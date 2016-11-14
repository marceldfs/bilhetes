@extends('layout.app')
@section('content')
<div class="container">
	<div class="row">	
			<div id="logoFade" class="col-md-12 divHide">
			            <figure>
			            	<a href="#"><img src="/image/logo.png" alt=""></a> 
			        	</figure>  
			        	 <h4 class="text-white-color">Mukhero ICT - Soluções para sua empresa</h4> 
			</div>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function()
		{
			$("#logoFade").fadeIn(3000).removeClass('divHide');
		});
</script>
@endsection