<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Torneo</title>
  </head>
  <body>
    <div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white" href="../index.php">Torneo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!--
                        <li>
                            <a class="nav-link text-white" href="../Home/Index.php" id="navbarDropdown" role="button">
                            Inicio  
                            </a>
                        </li>
                        -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Municipios  
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Municipios/Index.php">Ver Municipios</a>
                            <a class="dropdown-item" href="../Municipios/Create.php">Crear Municipio</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Equipos  
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Equipos/Index.php">Ver Equipos</a>
                            <a class="dropdown-item" href="../Equipos/Create.php">Crear Equipo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jugadores  
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Jugadores/Index.php">Ver Jugadores</a>
                            <a class="dropdown-item" href="../Jugadores/Create.php">Crear Jugador</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Posiciones  
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Posiciones/Index.php">Ver Posiciones</a>
                            <a class="dropdown-item" href="../Posiciones/Create.php"">Crear Posicion</a>
                            </div>
                        </li>
                    </ul>                    
                    <span class="text-success border border-success rounded p-1 mx-2"><?= $_SESSION["usuario"] ?></span>
                    <a class="btn btn-success my-2 my-sm-0" href="../cerrarSesion.php">Cerrar Sesión</a>                    
                </div>
            </nav>
        </header>
    </div>