<?php
include("conexion.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['id_tip_doc']) >= 1 && strlen($_POST['num_doc']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $name = trim($_POST['nombres']);
        $ape = trim($_POST['apellidos']);
        $tip_doc = trim($_POST['id_tip_doc']);
        $num_doc = trim($_POST['num_doc']);
        $email = trim($_POST['correo']);
        $pass = trim($_POST['contrasena']);
        //$consulta = "INSERT INTO `prueba`(`nombre`, `mail`) VALUES ('$name','$email')";
        $consulta = "INSERT INTO `login`(`nombres`, `apellidos`,`id_tip_doc`, `num_doc`, `correo`, `contrasena`) VALUES ('$name','$ape', '$tip_doc', '$num_doc', '$email', '$pass')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            echo "felicidades";
        } else {
            echo "a ocurrido un error";
        }

    } else {
        echo "complete los campos";
    }
}

?>