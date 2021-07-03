
<?php
require_once("configuraciones.php");
    require_once("arrays.php");
    
    ?>
<html lang="en">
  <head>
  
    <title>BOTIME ANIME juegos</title>
 
 
    </header>
    
    <?php

$carpeta = "juegos";

$dir = opendir($carpeta); 

?>
<section class="container my-5">
    <div class="row">
        <div class="col-12">
        <br>
        <br>

        

            <h1 class="titulos seriesetext center-block text-center" id="juegos">juegos</h1>
        </div>
    </div>

    <?php
        if(!empty($_GET["estado"]) && $_GET["estado"] == "alta"):
            $nombreseries = !empty($_GET["juegos"]) ? $_GET["juegos"] : "";
    ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="my-4 alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <p><b>Éxito!</b> Se dio de alta el juegos<?= nombre_original($_GET["juegos"]); ?></p>
                    </div>
                </div>
            </div>
    <?php
        endif;
    ?>
 

    <article class="row">
        <?php
            while($juegos = readdir($dir)):
                if($juegos == "." || $juegos == "..")
                    continue;

        ?>
                    <div class="col-12 col-md-4 my-4">
                        <section class="card-deck ">
                            <div class="card border-default">
                                <div class="card-body">
                                    <figure>
                                        <img src="<?= "$carpeta/$juegos/$juegos.jpg" ?>" alt="<?= $juegos; ?>" class="img-fluid">

                                        <figcaption class="card-title text-center"></figcaption>

                                        <p class="scrollable">
                                            <?= nl2br(file_get_contents("$carpeta/$juegos/descripcion.txt")); ?>
                                        </p>
                                    </figure>
                                    <figcaption class="card-title text-center"></figcaption>

                                        <p class="scrollable">
                                            <?= nl2br(file_get_contents("$carpeta/$juegos/disponibilidad.txt")); ?>
                                        </p>
                                    </figure>

                                </div>
                            </div>
                        </section>
                    </div>

        <?php
            endwhile;
        ?>

    </article>


</section>
<?php