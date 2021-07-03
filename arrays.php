<?php

$series = [];

$series["series"] = ["onep", "miku", "zodi", "nora", "idol", "mago","drag","dead","guerra","school","fairy tail","bproject"];

$navbar = [
    "Acerca de" => "home",
    "Contacto" => "contacto",
    "Galeria" => "galeria",
    "juegos" => "juegos",

];


$juegos = [];

$juegos["juegos"] = ["yugioh", "castlevania", "dragonz", "gundam", "kingdom", "mario","megaman","naruto","onepiece3","pokechu","sao","tales"];


/*$galeria = [];

    $galeria[] = [
        "nombre" => "Bproject estreno : 12/5/19",
        "descripcion" => " Estos chicos daran inicio a guerras musicales sin sentido y musicales descontrolados ",
        "ruta" => "imgs/bproject.jpg",
        "autor" => "Eiichirō Oda"
     

    ];
    

    $galeria[] = [
        "nombre" => "Drag estreno : 12/5/19",
        "descripcion" => "Despues de 1000 años nace la nueva reyna de los dragones pero no es lo que se eperaba ",
        "ruta" => "imgs/drag.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "School estreno : 12/5/19",
        "descripcion" => "¿Como sera la escuela para este muchacho anti social y retraido de la sociedad?",
        "ruta" => "imgs/school.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Guerra estreno : 12/5/19",
        "descripcion" => "Una atroz gerra se dara en un pais y solo una persona puede detenerla ¿pero el estara dispuesto? ",
        "ruta" => "imgs/guerra.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Dead estreno : 12/5/19",
        "descripcion" => "Un detective se encuentra un libro que mata a diestra y siniestra ¿como lo usara?",
        "ruta" => "imgs/dead.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Onepestreno : 12/5/19",
        "descripcion" => "Un chico de solo 17 años busca ser el rey de los piratas pero para lograrlo tendra que pasar unas pruebas",
        "ruta" => "imgs/onep.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Fairy tail estreno : 12/5/19",
        "descripcion" => "El hijo del dragon mas poderoso se quiere unir a un grupo de aventureros pero no todo es lo que parece",
        "ruta" => "imgs/fairy tail.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Mago estreno : 12/5/19",
        "descripcion" => "Un chico normal es asesinado y mandado a otro planeta con extraños super poderes",
        "ruta" => "imgs/mago.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Idol estreno : 12/5/19",
        "descripcion" => "Misteriosas cosas les susede a este lindo grupo de idols despued de pactar con el diablo",
        "ruta" => "imgs/idol.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Miku estreno : 12/5/19",
        "descripcion" => "Una chica que busca la fama se une a un grupo de idols",
        "ruta" => "imgs/miku.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Nora estreno : 12/5/19",
        "descripcion" => "Un solitario dios de la gerra se crusa con una misteriosa chica y su destino cambia ",
        "ruta" => "imgs/nora.jpg",
        "autor" => "Eiichirō Oda"

    ];
    $galeria[] = [
        "nombre" => "Zodiaco estreno : 12/5/19",
        "descripcion" => "Green un chico que descubre un misterioso poder dentro de el",
        "ruta" => "imgs/zodi.jpg",
        "autor" => "Eiichirō Oda"

    ];
    */
    $erroresseries = [
        "series" => "El series no existe",
        "campos_obligatorios" => "Los campos <b>nombre</b> y <b>descripción</b> son obligatorios",
        "series_existe" => "El serie ya está cargado",
        "formato_imagen" => "La imagen debe ser <b>PNG</b>"
    ]; 
    
    $okseries = [
        "borrado" => "la serie se borró correctamente",
        "alta"    => "la serie se dio de alta correctamente",
        "editar"  => "la serie se editó correctamente"
    ];



    $errorjuegos = [
        "series" => "El juegos no existe",
        "campos_obligatorios" => "Los campos <b>nombre</b> y <b>descripción</b> son obligatorios",
        "series_existe" => "El juegos ya está cargado",
        "formato_imagen" => "La imagen debe ser <b>PNG</b>"
    ]; 
    
    $okjuegos = [
        "borrado" => "el juegos se borró correctamente",
        "alta"    => "el juegos se dio de alta correctamente",
        "editar"  => "el juegos se editó correctamente"
    ];


    $errorlog = [
        "usuario_existe" => "El email ingresado ya está dado de alta en nuestro sitio",
        "datos_erroneos" => "Los datos ingresados no son correctos.",
        "permisos" => "No tenés permisos para ingresar a esa sección"
    ]; 

    $oklog = [
        "registro" => "Te registraste correctamente, bienvenido"
    ];

?>