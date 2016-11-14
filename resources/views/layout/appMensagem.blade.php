<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-3.3.7/css/edm.css') }}" rel="stylesheet">
        <link href="{{ asset('dataTables.bootstrap.min.cs') }}" rel="stylesheet">     
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('jquery-1.12.3.js')}}"></script>
        <script src="{{asset('jquery.dataTables.min.js')}}"></script>
        <title>SMS System</title>
            
    </head>
        
    <body>        
        <div class="navbar-wrapper">
            <div class="container">       
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img alt="Brand" src="/image/logp.png" href="/">         
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactos <span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="/contacto/{{ Auth::user()->id }}">Visualizar Todos</a></li>
                                        <li><a href="/evento/create">Adicionar</a></li>
                                        
                                     <!--    <li role="separator" class="divider"></li>
                                       <li><a href="#">Visualizar Unico</a></li> -->
                                      </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enviar SMS <span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="/grupo/">Visualizar Todos</a></li>
                                        <li><a href="/grupo/create">Adicionar</a></li>
                                      </ul>
                                </li>                    
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                         <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>    
                                </li>
                                @endif
                            </ul>
                                
                            
                          <form class="navbar-form navbar-right" role="search">                             
                                <a type="submit" class="btn btn-sm btn-warning" href="/evento/home">Gerir Bilhetes</a>
                          </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
            
        @yield('content')
            
            
        <div class="container">
            <hr class="featurette-divider">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>Mukhero ICT </p>
            </footer>
        </div>
    </body>
    
</html>