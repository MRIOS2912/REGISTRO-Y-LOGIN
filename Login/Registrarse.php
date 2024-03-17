<?php

session_start();

include_once('Config/Conexion.php');

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contraseña']) && isset($_POST['confirmar_contraseña'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $nombre = validar($_POST['nombre']);
    $email = validar($_POST['email']);
    $contraseña = validar($_POST['contraseña']);
    $confirmar_contraseña = validar($_POST['confirmar_contraseña']);

    $datasusuario = 'nombre=' . $nombre . '&email=' . $email;

    if (empty($nombre)) {
        header("location: ../Registrarse.php?error= El usuario es requerido&$datasusuario");
        exit();
    } elseif (empty($email)) {
        header("location: ../Registrarse.php?error= El email es requerido&$datasusuario");
        exit();
    } elseif (empty($contraseña)) {
        header("location: ../Registrarse.php?error= La contraseña es requerida&$datasusuario");
        exit();
    } elseif (empty($confirmar_contraseña)) {
        header("location: ../Registrarse.php?error= Confirmar la contraseña es requerida&$datasusuario");
        exit();
    } elseif ($contraseña !== $confirmar_contraseña) {
        header("location: ../Registrarse.php?error=Las contraseñas no coinciden&$datasusuario");
        exit();
    } else {
        $contraseña = md5($contraseña);

        $Sql = "SELECT * FROM registro WHERE email = '$email'";
        $query = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../Registrarse.php?error= El usuario ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO registro(nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";
            if ($conexion->query($sql2) === TRUE) {
                header("location: cuenta.php"); // Redirige a Inicio.php
                exit();
            } else {
                header("location: ../Registrarse.php?error= Ocurrió un error al crear el usuario");
                exit();
            }
        }
    }
} else {
    header('location: ../Registrarse.php');
    exit();
}
?>
