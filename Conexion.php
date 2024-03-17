<?php

$host = "localhost";
$user = "root";
$pass = "Mrios1988.,";

$db = "iniciodesesion";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexion fallida";
} else {
    echo "Conexion exitosa";
}
?>
