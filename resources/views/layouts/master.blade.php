<!php session_start() !> 
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}" />
        
        <script src="{!!url('js/jquery-3.3.1.min.js')!!}"></script>
    
        <script src="{!!url('js/script_idioma.js')!!}"></script>
</head>
<body>
     @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>

</body>

</html>