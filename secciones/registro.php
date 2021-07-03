<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokeweb</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
   
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
<header>
  <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == "home" ? "active" : ""; ?>">
                    <a class="nav-link"href="index.php?seccion=home"><b>Volver</b></a>
                </li>
    </header>
<main>
  
<div class="col-12">
    <div class="bg-login">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="register_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_register_container">
                            <img src="img/logo-login1.png"
                                 class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="form_container">
                        <form method="POST" action="registro.php">
                            <div class="form-row">
                                <div class="input-group mb-3 col-6">
                                    <input type="text" name="nombre" class="form-control input_user"
                                           placeholder="Nombre">
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <input type="text" name="apellido" class="form-control input_pass"
                                           placeholder="Apellido">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="input-group mb-3 col-12">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control input_user"
                                           placeholder="Email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="input-group mb-3 col-6">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="usuario" class="form-control input_user"
                                           placeholder="Usuario">
                                </div>
                                <div class="input-group mb-3 col-6">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control input_pass"
                                           placeholder="password">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn login_btn">Registrate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</main>

</body>
</html>