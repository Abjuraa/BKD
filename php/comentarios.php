<?php 
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['comentarios'])){
    if(strlen($_POST['nombre_comment']) && strlen($_POST['comment_preview']) && strlen($_POST['comment'])){
        $userComment = trim($_POST['nombre_comment']);
        $productComment = trim($_POST['comment_preview']);
        $comment = trim($_POST['comment']);
        $fecha_actual = date("d-m-Y");
        $seleccionada = 0; 
        if(isset($_POST['rating'])){
            $seleccionada = $_POST['rating'];
        }

        $buildComment = ";" . $fecha_actual . "," . $userComment . "," . $seleccionada . "," . $productComment . "," . $comment . "";
        $producto_comentario = $producto_comentario . $buildComment;

        $consulta = "UPDATE `productos` SET `producto_comentario` = '$producto_comentario' WHERE `id_prod` = '$id_prod'";
        $resultado = mysqli_query($conex, $consulta);
        
       
            
        
            
            echo "<script>window.location = window.location.href;</script>";
        
            
            exit();
        }


    }


}



?>