<!DOCTYPE html>
<?php

    require_once("../arrays.php");
    require_once("../funciones.php");
    require_once("../configuraciones.php");

    if(empty($_SESSION["usuario"]) || $_SESSION["usuario"]["perfil"] != "admin"):
        $_SESSION["estado"] = "error";
        $_SESSION["error"] = "permisos";
        
        header("Location:../index.php");
        die();
    endif;

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <head>
  <link rel="shortcut icon" href="imgs/icon.jpg">
    <title>BOTIME ANIME ONLINE HD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
  </head>

<body background="imgs/wall.jpg">
  <header>
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../index.php?seccion=home">Botime Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="navbar bg-primary navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?seccion=listado_series">Listado Series</a>
                </li>
            </ul>
        </div> 


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?seccion=listado_juegos">Listado juegos</a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <span class="navbar-text">
                        Bienvenido giuliano
                    </span>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       giuliano.botto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>


    </nav>
</header>

<main>
    <?php
        if(!empty($_GET["seccion"])):
            $seccion = $_GET["seccion"];

            if(file_exists("secciones/$seccion.php"))
                require_once("secciones/$seccion.php");
            else
                require_once("404.php");

        else:
            require_once("secciones/listado_series.php");
        endif;
        
    ?>
    <?php
        if(!empty($_GET["seccion"])):
            $seccion = $_GET["seccion"];

            if(file_exists("secciones/$seccion.php"))
                require_once("secciones/$seccion.php");
            else
                require_once("404.php");

        else:
            require_once("secciones/listado_juegos.php");
        endif;
        
    ?>

</main>
<footer>
 
 <div class="container">
<div class="row">
    <div class="col-12">
<h3 class="text-center">©2019 Botime ENTERTAINMENT, INC. TODOS LOS DERECHOS RESERVADOS.
Todas las marcas registradas referenciadas son propiedad de sus respectivos dueños.</h3>
       </div>
</div>
</div>
</footer>

</body>
</html>