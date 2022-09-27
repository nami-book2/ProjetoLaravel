<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/restrict/estilo.css') }}">
</head>

<body>
    <head>
        <picture>
            <img src="{{asset('img/logo.png')}}" alt="Logo" />
        </picture>
        <nav>
            <ul>
                <li>
                    <a href="{{url('/mensagem')}}">Mensagens</a>
                </li>
                <li>
                    <a href="{{url('/dashboard')}}">Usuários</a>
                </li>
                <li>
                    <a href="{{url('/avisos')}}">Avisos</a>
                </li>
            </ul>
        </nav>
    </head>

    <main>
        @yield('content')
    </main>
</body>

</html>