<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Logo  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <divn class="contanier-fluid">
    <!-- Logo marca e link  -->    
    <a class="navbar-brand" href="https://www.youtbe.com" target="_blank">
        <img src="https://w7.pngwing.com/pngs/426/941/png-transparent-youtube-logo-youtube-text-trademark-logo.png" alt="Logo" width="100px">
    </a>
    <!-- -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Desativado</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
    </div>
    </nav>