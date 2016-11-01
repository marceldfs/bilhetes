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
        <title>Ticket System</title>
            
    </head>
        
    <body>
        @yield('content')
    </body>
</html>