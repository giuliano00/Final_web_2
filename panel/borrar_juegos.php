<?php
require_once("../configuraciones.php");

if(empty($_POST["juegos"])):
    header("Location:index.php?seccion=listado_juegos&estado=error&error=juegos");
    die();
endif;

$juegos = $_POST["juegos"];

if(!is_dir(RUTA_juegos."$juegos")):
    header("Location:index.php?seccion=listado_juegos&estado=error&error=juegos");
    die();
endif;

unlink(RUTA_juegos."$juegos/$juegos.jpg");
unlink(RUTA_juegos."$juegos/descripcion.txt");
unlink(RUTA_juegos."$juegos/disponibilidad.txt");

rmdir(RUTA_juegos.$juegos);

header("Location:index.php?seccion=listado_juegos&estado=ok&ok=borrado");