@extends('layout.app')

@section('content')

<!-- Carousel
   ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="image/1.png" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>EDM iluminando a transformação !</h1>
                    <p>Campanha de Censo 2016 - Fase 2</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="image/2.png" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>WebAPP de Registro e Controle de Censo</h1>
                    <p>Aplicação Desenvolvida para o cadastro das Fichas do CensoEDM2016
                        Queira por favor registar correctamente os dados das fichas validadas!</p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>CENSO 2016</h2>
            <p> Bem vindo a aplicacao CensoEDM2016<br><br>
                Esta aplicação tem como base o registo de todas fichas preenchidas durante o recenseamento dos trabalhadores activos e não activos da EDM (Julho-Agosto 2016).<br>
                Os dados em carregamento devem ser devidamente carregados e corrigidos antes de entrar na aplicação, portanto:<br>
                Verifique toda ficha, de forma a eliminar todos erros, antes de carregar na aplicação<br>
                Verifique os anexos, como forma de garantia dos dados existentes nas ficas;<br>
                Verifique se a ficha contem assinatura ou impressão digital><br></p>
        </div>
    </div>
</div>
<div class="container opcoes">
    <hr class="featurette-divider">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-rounded" src="image/i1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Registro de Efectivos</h2>
            <p>Menu para registro dos dados do colaboradores activos:<br>Efectivos, Estagiarios, Avencados, Membros do CA</p>
            <p><a class="btn btn-default  btn-lg-edm" href='/policies?tipo=efectivo' role="button">Adicionar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="image/i2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Registro de Reformados</h2>
            <p>Menu para registro dos dados dos Reformados:</p>
            <p><a class="btn  btn-default btn-lg-edm" href="/policies?tipo=reformado" role="button">Adicionar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="image/i2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Registro de Pensionistas</h2>
            <p>Menu para registro dos dados dos pensionistas:<br>Verificar a idades dos pensionistas a carregar no sistema!!</p>
            <p><a class="btn  btn-default btn-lg-edm" href="/policies?tipo=pensionista" role="button">Adicionar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>
@stop
