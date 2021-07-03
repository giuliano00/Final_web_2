<?php
require_once("configuraciones.php");
require_once("funciones.php");

if(empty($_POST["email"]) || empty($_POST["password"])):
    $_SESSION["estado"] = "error";
    $_SESSION["error"] = "campos_obligatorios_registro";
    header("Location:index.php?seccion=login");
    die();
endif;

$email = $_POST["email"];
$password = $_POST["password"];

if(!is_dir("usuarios/$email")):
    $_SESSION["estado"] = "error";
    $_SESSION["error"] = "datos_erroneos";
    header("Location:index.php?seccion=login");
    die();
endif;

$passwordUsuario = file_get_contents("usuarios/$email/password.txt");

if(!password_verify($password,$passwordUsuario)):
    $_SESSION["estado"] = "error";
    $_SESSION["error"] = "datos_erroneos";
    
    header("Location:index.php?seccion=login");
    die();
endif;

$nombre = file_get_contents("usuarios/$email/nombre.txt");
$apellido = file_get_contents("usuarios/$email/apellido.txt");
$usuario = file_get_contents("usuarios/$email/usuario.txt");
$perfil = file_get_contents("usuarios/$email/perfil.txt");


$_SESSION["usuario"] = [
    "nombre" => $nombre,
    "apellido" => $apellido,
    "usuario" => $usuario,
    "perfil" => $perfil,
    "email" => $email
];


if($perfil == "admin"):
    header("Location:panel/index.php");
    die();
else:
    header("Location:index.php");
    die();
endif;