<?php
   if(!empty($_GET["juegos"])):

        if(!is_dir("../juegos/".$_GET["juegos"])):
            header("Location:index.php?seccion=listado_juegos&estado=error&error=juegos");
            die();
        endif;

        $titulo = "Editar juegos";
        $boton = "Editar";
        $action = "editar_juegos.php";
        $nombre = $_GET["juegos"];
        $descripcion = file_get_contents("../juegos/$nombre/descripcion.txt");
        $disponibilidad = file_get_contents("../juegos/$nombre/disponibilidad.txt");
        $imagen = file_exists("../juegos/$nombre/$nombre.jpg") ? "../juegos/$nombre/$nombre.jpg" : null;

    else:
        
        $titulo = "Cargar juegos";
        $boton = "Nuevo";
        $action = "nuevo_juegos.php";

        $nombre = null;
        $descripcion = null;
        $disponibilidad = null;
        $imagen = null;
    endif;

?>

   <section class="container my-5">
        <div class="row">
            
            <div class="col-12">
                
                <h2 class="titulos juegostext center-block" id="acerca"><?= $titulo; ?></h2>
            </div>
        </div>

        <div class="row justify-content-center ">
            
            <div class="col-6">
                <?php
                    if(!empty($_GET["estado"])):
                        $estado = $_GET["estado"];

                        if($estado == "error"):
                        
                            if(!empty($_GET["error"])):
                                $error = $_GET["error"];
                                
                              
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <strong>¡Error!</strong> <?= $errorjuegos[$error]; ?>
                                    </div>
                                <?php
                                endif;

                            endif;
                        endif;
                   
            
                ?>
                <div class="card text-white bg-dark mb-3" style="max-width: 180rem;">

                <div class="card my-3 border border-secondary shadow card text-white bg-dark">
                    <div class="card-header text-center py-2 m-0" style="background-color:#000;">
                    </div>
                    <div class="card-body">
                        
                        <form action="<?= $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" value="<?= nombre_original($nombre); ?>" name="nombre" id="nombre" class="form-control" placeholder="nombre del juegos">
                            </div>
                        <?php
                            if($nombre):
                        ?>
                                <input type="hidden" name="juegos" value="<?= $nombre; ?>">
                        <?php
                            endif;
                        ?>

                            <div class="form-group">
                              <label for="descripcion">Descripcion</label>
                              <textarea class="form-control" name="descripcion" id="descripcion" rows="4" class="form-control"placeholder="descripcion del juegos"><?= $descripcion; ?></textarea>
                            </div>

                            <div class="form-group">
                              <label for="disponibilidad">disponibilidad</label>
                              <textarea class="form-control" name="disponibilidad" id="disponibilidad" rows="3" class="form-control"placeholder="disponibilidad del juegos"><?= $disponibilidad; ?></textarea>
                            </div>

                            <div class="form-group">
                              <label for="imagen" class="d-none">Imagen</label>
                              <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted">El formato de la imagen debe ser <b>jpg</b></small>
                            </div>

                            <?php
                                if($imagen):
                            ?>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="<?= $imagen; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            ?>
                            <div class="pt-4">
                             <button type="submit" class="btn btn-primary btn-block"><?= $boton; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

    </section>
