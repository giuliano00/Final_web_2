<?php
              if(isset($_GET["error"]) && $_GET["error"] == "true"):
            ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  <strong>Error!</strong> Los campos <b>Usuario</b> ,  y <b>Email</b> son obligatorios.
                </div>
            <?php
              endif;
            
if(empty($_POST["email"]) || empty($_POST["usuario"])){

    header("Location:errorcontacto.php");
    die();
}

$usuario = $_POST["usuario"] ;
$email = $_POST["email"] ;

header("Location:gracias.php?usuario=$usuario");

?>
