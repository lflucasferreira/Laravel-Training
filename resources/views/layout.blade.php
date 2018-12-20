<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('title', 'Laracast') </title>
    <style>
        .container-margin-top {
            margin-top: 20px !important;  
        } 

        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container container-margin-top">   
        @yield('content')
    </div>
</body>
</html>