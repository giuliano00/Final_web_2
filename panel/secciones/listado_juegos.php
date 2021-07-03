<section class="container">
        <div class="row my-4">
            <article class="col-12">
            
            <div class="card text-white bg-dark mb-3" style="max-width: 180rem;">       
             <div class="card-header"><h1>Listado de juegos</h1></div>        
             <div class="card-body">
                        
                    </div>
                    <a href="index.php?seccion=nuevo_juegos" class="btn btn-sm btn-info float-right my-10"><h2>Agregar juegos</h2></a>
                    <div class="card-body">
                        <?php
                            if(!empty($_GET["estado"])):
                                $estado = $_GET["estado"];

                                if($estado == "error"):
                                    
                                    if(!empty($_GET["error"])):
                                        $error = $_GET["error"];
                                        
                                        if(array_key_exists($error, $errorjuegos)):
                                        ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>¡Error!</strong> <?=  $errorjuegos[$error]; ?>
                                            </div>
                                        <?php
                                        endif;

                                    endif;

                                elseif($estado == "ok"):
                                    if(!empty($_GET["ok"])):
                                        $ok = $_GET["ok"];
                                        
                                        if(array_key_exists($ok,$okjuegos)):
                                        ?>
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <strong>¡Bien!</strong> <?= $okjuegos[$ok]; ?>
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
                                    <th>disponibilidad</th>
                                    <th>Imágen</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $dir = RUTA_juegos;
                                    
                                    $carpeta = opendir($dir);

                                    while($juegos = readdir($carpeta)):
                                        if($juegos == "." || $juegos == "..")
                                            continue;
                                ?>

                                        <tr>
                                            <td><?= nombre_original($juegos); ?></td>
                                            <td><?= nl2br(file_get_contents("$dir/$juegos/descripcion.txt")); ?></td>
                                            <td><?= nl2br(file_get_contents("$dir/$juegos/disponibilidad.txt")); ?></td>
                                            <td>
                                                <img width="150" src="<?= cargar_imagen("../juegos/$juegos/$juegos.jpg"); ?>" alt="<?= $juegos; ?>">
                                            </td>
                                            <td>
                                               
                                                   
                                                  
                                            <a class="item" href="index.php?seccion=nuevo_juegos&juegos=<?= $juegos; ?>"><button type="submit" class="btn btn-success"class="item">Editar</button></a>
                                                        

                                                        <form action="borrar_juegos.php" method="post">
                                                            <input type="hidden" name="juegos" value="<?= $juegos; ?>">
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