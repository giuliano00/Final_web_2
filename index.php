<!DOCTYPE html>
<?php
    
    require_once("configuraciones.php");
    require_once("arrays.php");
    require_once("funciones.php");

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Botime</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php

    if(empty($_GET["seccion"]) || ($_GET["seccion"] != "registro" && $_GET["seccion"] != "login")):

?>

<header>
    
        </div>
    </div>
</header>

<nav class="navbar bg-primary navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar-nav mr-auto">
            <?php
                foreach($navbar as $nombre => $seccion):
                    if($seccion == "trivia" && empty($_SESSION["usuario"])) :
                        continue;
                    endif;
            
            ?>
                    <li class="nav-item <?php echo !empty($_GET["seccion"]) && $seccion == $_GET["seccion"] ? "active" : ""; ?>">
                        <a class="nav-link" href="index.php?seccion=<?= $seccion; ?>"><?= $nombre; ?></a>
                    </li>
            <?php
                endforeach;
            ?>
        </ul>

        <?php
        if(empty($_SESSION["usuario"])):
        ?>
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <a href="index.php?seccion=registro" class="nav-link">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?seccion=login" class="nav-link">Ingresar</a>
                </li>
            </ul>
        <?php
        else:
        ?>
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <span class="nav-link"><?= $_SESSION["usuario"]["usuario"]; ?></span>
                </li>
                <?php
                    if($_SESSION["usuario"]["perfil"] == "admin"):
                ?>
                    <li class="nav-item">
                        <a href="panel/index.php" class="nav-link">Panel</a>
                    </li>
                <?php
                    endif;
                ?>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        <?php
        endif;
        ?>


    </div>
    <!-- /.navbar-collapse -->
</nav>
<?php
    endif;
?>

<main>
    <!-- CONTENIDO -->

    <?php
        if(!empty($_SESSION["estado"])):
            $estado = $_SESSION["estado"];

            if($estado == "error"):
                
                if(!empty($_SESSION["error"])):
                    $error = $_SESSION["error"];
                    
                    if(array_key_exists($error,$errorlog)):
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>¡Error!</strong> <?= $errorlog[$error]; ?>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION["error"]);
                endif;

            elseif($estado == "ok"):
                if(!empty($_SESSION["ok"])):
                    $ok = $_SESSION["ok"];
                    
                    if(array_key_exists($ok,$oklog)):
                    ?>
                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>¡Bien!</strong> <?= $oklog[$ok]; ?>
                        </div>
                    <?php
                    endif;
                    
                    unset($_SESSION["ok"]);
                endif;
            endif;
        endif;
        





        if(!empty($_GET["seccion"])):
            $seccion = $_GET["seccion"];

            if(file_exists("secciones/$seccion.php"))
                require_once("secciones/$seccion.php");
            else
                require_once("secciones/404.php");
            
        else:
            require_once("secciones/home.php");
        endif;


    ?>

</main>

<?php

if(empty($_GET["seccion"]) || ($_GET["seccion"] != "registro" && $_GET["seccion"] != "login")):

?>4
<div class="container-fluid px-0">
    <footer class="der">
        <div class="row mx-0">
            <div class="col-12 px-0">
                <p class="text-center h5">©2019 Botime ENTERTAINMENT, INC. TODOS LOS DERECHOS RESERVADOS.
Todas las marcas registradas referenciadas son propiedad de sus respectivos dueños.<</p>

            </div>
        </div>
    </footer>
</div>
<?php
    endif;
?>
</body>
</html>