<?php
include_once("conexion.php");

if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['numero']) && !empty($_POST['contrasena']) ){

    $name = $_POST['nombres'];
    $apell = $_POST['apellidos'];
    $email = $_POST['correo'];
    $num = $_POST['numero'];
    $pass = $_POST['contrasena'];

    $sql = "INSERT INTO inicio_sesion(nombre, apellido, email, num_tel, pass) VALUES(:nom,:apell,:email,:num,:pass)";
    $stmt - $conexion->prepare($sql);
    $stmt->bindParam(":nom",$name);
    $stmt->bindParam(":apell",$apell);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":num",$num);
    $stmt->bindParam(":pass",$pass);
    if($stmt->execute()){
        header("location: sesion.php");
    }else print("Error en la consulta");
    
}else{
    print(" Debe completar todos los campos.");
}
?>

