<?php

require_once("../funciones.php");
require_once("../configuraciones.php");

ini_set("upload_max_filesize","30M");




$nombre = nombre_limpio($_POST["nombre"]);
$descripcion = htmlentities(trim($_POST["descripcion"]));
$disponibilidad = htmlentities(trim($_POST["disponibilidad"]));

if(is_dir(RUTA_juegos."$nombre")):
    header("Location:index.php?seccion=nuevo_juegos&estado=error&error=juegos_existe");
    die();
endif;



    if(!empty($_FILES["imagen"])):
        $imagen = $_FILES["imagen"];
        if(!empty($imagen["type"]) && ($imagen["type"] != "image/jpg" && $imagen["type"] != "image/jpeg")):
            header("Location:index.php?seccion=nuevo_juegos&estado=error&error=formato_imagen");
            die();
        endif;

        mkdir(RUTA_juegos."$nombre");
    move_uploaded_file($imagen["tmp_name"],RUTA_juegos."$nombre/$nombre.jpg");

    
endif;



file_put_contents(RUTA_juegos."$nombre/descripcion.txt",$descripcion);
file_put_contents(RUTA_juegos."$nombre/disponibilidad.txt",$disponibilidad);
header("Location:index.php?seccion=listado_juegos&estado=ok&ok=alta");