
<?php
require_once("configuraciones.php");
    require_once("arrays.php");
    
    ?>
<html lang="en">
  <head>
    <title>BOTIME ANIME GALERIA</title>
    </header>
    
    <?php

$carpeta = "series";

$dir = opendir($carpeta); 

?>
<section class="container my-5">
    <div class="row">
        <div class="col-12">
        <br>
        <br>

        

            <h1 class="titulos seriesetext center-block text-center" id="series">Anime</h1>
        </div>
    </div>

    <?php
        if(!empty($_GET["estado"]) && $_GET["estado"] == "alta"):
            $nombreseries = !empty($_GET["series"]) ? $_GET["series"] : "";
    ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="my-4 alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <p><b>Éxito!</b> Se dio de alta la serie<?= nombre_original($_GET["series"]); ?></p>
                    </div>
                </div>
            </div>
    <?php
        endif;
    ?>
  

    <article class="row">
        <?php
            while($series = readdir($dir)):
                if($series == "." || $series == "..")
                    continue;

        ?>
                    <div class="col-12 col-md-4 my-4">
                        <section class="card-deck ">
                        
                            <div class="card border-danger  mb-3">
                                <div class="card-body">
                                <div class="marco">
                                    <figure>
                                        <img src="<?= "$carpeta/$series/$series.jpg" ?>" alt="<?= $series; ?>" class="img-fluid">

                                        <figcaption class="card-title text-center"></figcaption>

                                        <p class="scrollable">
                                            <?= nl2br(file_get_contents("$carpeta/$series/descripcion.txt")); ?>
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