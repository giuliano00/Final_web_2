<?php
require_once("../configuraciones.php");

if(empty($_POST["serie"])):
    header("Location:index.php?seccion=listado_series&estado=error&error=serie");
    die();
endif;

$serie = $_POST["serie"];

if(!is_dir(RUTA_SERIES."$serie")):
    header("Location:index.php?seccion=listado_series&estado=error&error=serie");
    die();
endif;

unlink(RUTA_SERIES."$serie/$serie.jpg");
unlink(RUTA_SERIES."$serie/descripcion.txt");

rmdir(RUTA_SERIES.$serie);

header("Location:index.php?seccion=listado_series&estado=ok&ok=borrado");