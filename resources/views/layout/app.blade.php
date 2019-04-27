<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PI</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a class="navbar-brand mr-auto mr-lg-0" href="# "><img src="logo.png" align="right" height="30" width="30" />Controle Financeiro</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/template"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categoria">Categoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/usuario">Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/movimento">Movimento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/situacao">Situação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/parcela">Parcela</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/banco">Banco</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/forma_pagamento">Forma de Pagamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/conta_banco">Conta do Banco</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/baixa">Baixa</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container" style="margin-top: 60px;">
@yield('titulo')
    @yield('conteudo')
    @yield('tituloexercicio')
    @yield('resultadoexercicio')
</main>
</body>
</html>