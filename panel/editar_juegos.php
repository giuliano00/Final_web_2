<?php

require_once("../funciones.php");
require_once("../configuraciones.php");

ini_set("upload_max_filesize","30M");


if(empty($_POST["juegos"])):
    header("Location:index.php?seccion=listado_juegos&estado=error&error=juegos");
    die();
endif;

$serie = $_POST["juegos"];

if(!is_dir(RUTA_juegos."$juegos")):
    header("Location:index.php?seccion=nuevo_juegos&juegos=$juegos&estado=error&error=juegos");
    die();
endif;

if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    
    header("Location:index.php?seccion=nuevo_juegos&juegos=$juegos&estado=error&error=campos_obligatorios");
    die();
endif;

if(empty($_POST["nombre"]) || empty($_POST["disponibilidad"])):
    
    header("Location:index.php?seccion=nuevo_juegos&juegos=$juegos&estado=error&error=campos_obligatorios");
    die();
endif;

$nombre = nombre_limpio($_POST["nombre"]);
$descripcion = htmlentities($_POST["descripcion"]);
$disponibilidad = htmlentities($_POST["disponibilidad"]);
if(is_file(RUTA_juegos."$juegos/$juegos.jpg"))
    rename(RUTA_juegos."$juegos/$juegos.jpg",RUTA_juegos."$juegos/$nombre.jpg");
    
rename(RUTA_juegos."$juegos",RUTA_juegos."$nombre");
    

if(!empty($_FILES["imagen"]) && $_FILES["imagen"]["size"] > 0):
    $imagen = $_FILES["imagen"];

    if(!empty($imagen["type"]) && $imagen["type"] != "image/jpg"):
        header("Location:index.php?seccion=nuevo_juegos&juegos=$juegos&estado=error&error=formato_imagen");
        die();
    endif;

    move_uploaded_file($imagen["tmp_name"],RUTA_juegos."$nombre/$nombre.jpg");
endif;

file_put_contents(RUTA_juegos."$nombre/descripcion.txt",$descripcion);
file_put_contents(RUTA_juegos."$nombre/disponibilidad.txt",$disponibilidad);
header("Location:index.php?seccion=listado_juegos&estado=ok&ok=editar");