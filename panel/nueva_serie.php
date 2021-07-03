<?php

require_once("../funciones.php");
require_once("../configuraciones.php");

ini_set("upload_max_filesize","30M");


if(empty($_POST["nombre"]) || empty($_POST["descripcion"])):
    header("Location:index.php?seccion=nueva_serie&estado=error&error=campos_obligatorios");
    die();
endif;

$nombre = nombre_limpio($_POST["nombre"]);

$descripcion = htmlentities(trim($_POST["descripcion"]));

if(is_dir(RUTA_SERIES."$nombre")):
    header("Location:index.php?seccion=nueva_serie&estado=error&error=series_existe");
    die();
endif;



    if(!empty($_FILES["imagen"])):
        $imagen = $_FILES["imagen"];
        if(!empty($imagen["type"]) && ($imagen["type"] != "image/jpg" && $imagen["type"] != "image/jpeg")):
            header("Location:index.php?seccion=nueva_foto&estado=error&error=formato_imagen");
            die();
        endif;

        mkdir(RUTA_SERIES."$nombre");
    move_uploaded_file($imagen["tmp_name"],RUTA_SERIES."$nombre/$nombre.jpg");

    
endif;



file_put_contents(RUTA_SERIES."$nombre/descripcion.txt",$descripcion);

header("Location:index.php?seccion=listado_series&estado=ok&ok=alta");