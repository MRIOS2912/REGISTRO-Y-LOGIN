<?php
 session_start();
 include('Conexion.php');

 if(isset($_POST['Usuario']) && isset($_POST['Contraseña'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;


    }
    
    $Usuario = validate($_POST['Usuario']);
    $Contraseña = validate($_POST['Contraseña']);

    if (empty($Usuario)){
        header("Location: Index.php?error=EL Usuario Es Requerido");
        exit();
    }elseif (empty($Contraseña)) {
        header("Location: Index.php?error=La Contraseña Es Requerida");
        exit();
    }else{

         // $Contraseña=md5($_POST["Contraseña"]);

        $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Contraseña = '$Contraseña'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Contraseña){
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                header("location: Inicio.php");
                exit();

            }else {
                header("Location: Index.php?error=El usuario o la contraseña son incorrectas");
                exit();
            }
        }else {
            header("Location: Index.php?error=El usuario o la contraseña son incorrectas");
            exit();
        }
    }

} else {
    header("Location: Index.php");
    exit();
}