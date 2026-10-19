<?php

$servidor = "localhost";
$baseDatos = "pizzeria";
$usuario = "root";
$contrasenia = "";

try {

    $conexion = new PDO("mysql:host=localhost;dbname=pizzeria", "root", "");
    echo("Conexion establecida");

} catch (Exception $error) {
    echo $error->getMessage();
}

?>