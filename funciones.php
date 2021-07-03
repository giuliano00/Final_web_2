<?php

function nombre_limpio($str){
    $nombre = strip_tags(trim(strtolower($str)));
    $nombre = str_replace(" ","_",$nombre);

    return $nombre;
}
function nombre_original($str){
    $nombre = str_replace("_"," ",$str);

    return ucfirst($nombre);
}

function cargar_imagen($ruta){

    if(is_file($ruta)):
        return $ruta;

    else:
        if(is_file("img/sin_imagen.jpg")):
            return "img/sin_imagen.jpg";
        else:
            return "../img/sin_imagen.jpg";
        endif;
    endif;

}