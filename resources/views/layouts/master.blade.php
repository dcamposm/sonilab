<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}" />
        
       
</head>
<body>
     @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>

</body>
</html>