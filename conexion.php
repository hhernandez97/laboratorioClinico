<?php 
$servidor = "sql306.epizy.com";
$nombreusuario = "epiz_29377789";
$password = "p7mNDqe8PFid8";
$db = "epiz_29377789_clinica";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Error en conexion: " . $conexion->connect_error);

}

?>