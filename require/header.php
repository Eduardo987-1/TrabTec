<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopTour</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="redes/dist/sharestatic.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="navbar">
        <nav>
            <div class="nav-wrapper" style="background-color: #2E3131;">
                <!-- Logo -->
                <a href="index.php" class="brand-logo center">TopTour</a>

                <!-- Ícone para abrir no Mobile -->
                <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul id="navbar-items" class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#pacotes">Viagem</a></li>
                    <li><a href="#contatos">Contatos</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Menu Mobile -->
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#pacotes">Viagem</a></li>
        <li><a href="#contatos">Contatos</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
    </ul>