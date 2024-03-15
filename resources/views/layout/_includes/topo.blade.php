<!DOCTYPE html>
<html>
<head>
<title>@yield('titulo')</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="{{asset('assets/index.css')}}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper deep orange">
                <a href="#!" class="brand-logo">crud</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{route('admin.funcionarios')}}">funcionarios</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="{{route('admin.funcionarios')}}">funcionarios</a></li>
        </ul>
    </header>
