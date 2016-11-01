@extends('layout.app3')

@section('content')

    <div class="container">
        <figure class="logo animated fadeInDown delay-07s">
            <a href="#"><img src="image/logo.png" alt=""></a> 
        </figure>   
        <h1 class="text-white-color">Bem vindo ao seu Gestor de Bilhetes</h1>
        <p class="text-white-color">
            Entrega rapida e segura dos bilhetes do seu evento!
        </p>
            <a class="btn btn-danger" href="/evento/create"><span class="text-white-color">Começar</span></a>
    </div>
        <div class="container">
            <hr class="featurette-divider">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p><span class="text-white-color">Mukhero ICT</span> </p>
            </footer>
        </div>
@stop


