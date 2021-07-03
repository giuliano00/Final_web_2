<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BOTIME ANIME ONLINE HD</title>

   
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
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="img/logo-login1.png"
                                 class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form action="login.php" method="POST">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control input_user"
                                       placeholder="usuario@email.com">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control input_pass"
                                       placeholder="***********">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Recordarme</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" class="btn login_btn">Ingresar</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="d-flex justify-content-center links">
                            ¿No tenes usuario? <a href="registro.php?" class="ml-2">Registrate</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="index.php?seccion=contacto">¿Olvidaste tu clave?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</main>


</body>
</html>