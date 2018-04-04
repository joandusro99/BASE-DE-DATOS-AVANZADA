<?php

$host = "localhost";
$user = "root";
$password = "mysql2018";
$database = "ud";
$port = "3306";
$conexion = mysqli_connect($host, $user, $password, $database, $port);
$cadena = "SELECT nombre,clave FROM usuario";
$resultado = mysqli_query($conexion, $cadena);
if (mysqli_num_rows($resultado) > 0) {

    while ($registro = mysqli_fetch_assoc($resultado)) {
        
        if ($_REQUEST["usuario"] == $registro["nombre"] && $_REQUEST["clave"] == $registro["clave"]) {
echo "usuario:" . $registro["nombre"] . "<br> " . "clave:" . $registro["clave"];
            echo "acceso concebido";
        } else {
           echo "acceso denegado";
        }
    }
} else {
    echo "0 registros";
}
    