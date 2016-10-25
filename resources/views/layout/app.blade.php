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
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
        <title>Censo 2016 - Electricidade de Mo&ccedil;ambique</title>
            
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
                            <img alt="Brand" src="image/logp.png">         
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/efectivo">Efectivo</a></li>
                                <li><a href="/reformado">Reformados</a></li>
                                <li><a href="/pensionista">Pensionistas</a></li>
                                <li><a href="/busca">Busca</a></li>
                                @if (Auth::guest())
                                @else
                                @if (Auth::user()->tipo_utilizador==1 || Auth::user()->tipo_utilizador==2)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Supervisor <span class="caret"></span>
                                    </a>
                                        
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/relatorio') }}"><i class="fa fa-btn fa-sign-out"></i>Relatorio</a></li>
                                    </ul>
                                </li>
                                @endif
                                @endif
                                @if (Auth::guest())
                                @else
                                @if (Auth::user()->tipo_utilizador==1)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Administrador <span class="caret"></span>
                                    </a>
                                        
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/utilizadores') }}"><i class="fa fa-btn fa-sign-out"></i>Utilizadores</a></li>
                                    </ul>
                                </li>
                                @endif
                                @endif
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
                                        <li><a href="{{ url('/mudarsenha') }}"><i class="fa fa-btn"></i>Alterar minha senha</a></li>
                                         <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>    
                                </li>
                                @endif
                            </ul>
                                
                            <!--
                          <form class="navbar-form navbar-right" role="search">
                             <div class="form-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                             </div>
                                <button type="submit" class="btn btn-sm btn-warning">Procurar</button>
                          </form>-->
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
                <p>&copy; 2016 Eletricidade de Mo&ccedil;ambique, LDA. &middot; - Reportar bug (<a href="mailto:herlim.telhano@edm.co.mz">Herlim Telhano</a>) </p>
            </footer>
        </div>
    </body>
</html>