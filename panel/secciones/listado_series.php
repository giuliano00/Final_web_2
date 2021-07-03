<section class="container">
        <div class="row my-4">
            <article class="col-12">
            
            <div class="card text-white bg-dark mb-3" style="max-width: 180rem;">       
             <div class="card-header"><h1>Listado de Series</h1></div>        
             <div class="card-body">
                        
                    </div>
                    <a href="index.php?seccion=nueva_serie" class="btn btn-sm btn-info float-right my-10"><h2>Agregar Anime</h2></a>
                    <div class="card-body">
                        <?php
                            if(!empty($_GET["estado"])):
                                $estado = $_GET["estado"];

                                if($estado == "error"):
                                    
                                    if(!empty($_GET["error"])):
                                        $error = $_GET["error"];
                                        
                                        if(array_key_exists($error,$erroresseries)):
                                        ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>¡Error!</strong> <?= $erroresseries[$error]; ?>
                                            </div>
                                        <?php
                                        endif;

                                    endif;

                                elseif($estado == "ok"):
                                    if(!empty($_GET["ok"])):
                                        $ok = $_GET["ok"];
                                        
                                        if(array_key_exists($ok,$okseries)):
                                        ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>¡Bien!</strong> <?= $okseries[$ok]; ?>
                                            </div>
                                        <?php
                                        endif;

                                    endif;
                                endif;
                            endif;
                        ?>

                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm fs-90 table-hover table-condesed" >
                                <thead class="thead-dark text-center" >
                                <tr>
                                    <th info>Nombre</th> 
                                    <th>Descripción</th>
                                    <th>Imágen</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $dir = RUTA_SERIES;
                                    
                                    $carpeta = opendir($dir);

                                    while($series = readdir($carpeta)):
                                        if($series == "." || $series == "..")
                                            continue;
                                ?>

                                        <tr>
                                            <td><?= nombre_original($series); ?></td>
                                            <td><?= nl2br(file_get_contents("$dir/$series/descripcion.txt")); ?></td>
                                            <td>
                                                <img width="150" src="<?= cargar_imagen("../series/$series/$series.jpg"); ?>" alt="<?= $series; ?>">
                                            </td>
                                            <td>
                                               
                                                   
                                                  
                                                        <a class="item" href="index.php?seccion=nueva_serie&serie=<?= $series; ?>"><button type="submit" class="btn btn-success"class="item">Editar</button></a>
                                                        

                                                        <form action="borrar_serie.php" method="post">
                                                            <input type="hidden" name="serie" value="<?= $series; ?>">
                                                            <button type="submit"class="btn btn-danger" class="item">Borrar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    endwhile;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>