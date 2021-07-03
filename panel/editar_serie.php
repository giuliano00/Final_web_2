<?php

require_once("../funciones.php");
require_once("../configuraciones.php");

ini_set("upload_max_filesize","30M");


if(empty($_POST["serie"])):
    header("Location:index.php?seccion=listado_series&estado=error&error=serie");
    die();
endif;

$serie = $_POST["serie"];

if(!is_dir(RUTA_SERIES."$serie")):
    header("Location:index.php?seccion=nueva_serie&serie=$serie&estado=error&error=serie");
    die();
endif;

if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    
    header("Location:index.php?seccion=nueva_serie&serie=$serie&estado=error&error=campos_obligatorios");
    die();
endif;

$nombre = nombre_limpio($_POST["nombre"]);
$descripcion = htmlentities($_POST["descripcion"]);

if(is_file(RUTA_SERIES."$serie/$serie.jpg"))
    rename(RUTA_SERIES."$serie/$serie.jpg",RUTA_SERIES."$serie/$nombre.jpg");
    
rename(RUTA_SERIES."$serie",RUTA_SERIES."$nombre");
    

if(!empty($_FILES["imagen"]) && $_FILES["imagen"]["size"] > 0):
    $imagen = $_FILES["imagen"];

    if(!empty($imagen["type"]) && $imagen["type"] != "image/jpg"):
        header("Location:index.php?seccion=nueva_serie&serie=$serie&estado=error&error=formato_imagen");
        die();
    endif;

    move_uploaded_file($imagen["tmp_name"],RUTA_SERIES."$nombre/$nombre.jpg");
endif;

file_put_contents(RUTA_SERIES."$nombre/descripcion.txt",$descripcion);

header("Location:index.php?seccion=listado_series&estado=ok&ok=editar");