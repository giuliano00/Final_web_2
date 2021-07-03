<?php


require_once("funciones.php");
require_once("configuraciones.php");

if(empty($_POST["email"]) || empty($_POST["password"])):
    header("Location:index.php?seccion=registro&estado=error&error=campos_obligatorios_registro");
    die();
endif;

$email = $_POST["email"];
$password = $_POST["password"];

$usuarioEmail = explode("@",$email)[0];

$usuario = $_POST["usuario"] ? $_POST["usuario"] : $usuarioEmail;
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

if(is_dir("usuarios/$email")):
    $_SESSION["estado"] = "error";
    $_SESSION["error"] = "usuario_existe";
    
    header("Location:index.php?seccion=registro");
    die();
endif;


mkdir("usuarios/$email");
file_put_contents("usuarios/$email/nombre.txt",$nombre);
file_put_contents("usuarios/$email/apellido.txt",$apellido);
file_put_contents("usuarios/$email/usuario.txt",$usuario);
file_put_contents("usuarios/$email/perfil.txt","usuario");
file_put_contents("usuarios/$email/password.txt",password_hash($password,PASSWORD_DEFAULT));

$_SESSION["estado"] = "ok";
$_SESSION["ok"] = "registro";
header("Location:index.php?seccion=login");
