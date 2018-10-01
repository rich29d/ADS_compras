<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Compras') }}</title>

    <link href="{{ css('style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ css('animations.css')  }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('public/icon.ico') }}"/>
</head>
