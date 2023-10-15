<?php
$queryM = "SELECT * FROM `productos` WHERE `producto_estrella` = 1";       
$resultado = mysqli_query($conex, $queryM);
$datos = mysqli_fetch_assoc($resultado); 

$id_producto_star = $datos['id_prod'];       
$producto_nombre_star = $datos['nombre_producto'];
$producto_oferta_star = $datos['oferta_producto'];
$producto_img_star = base64_encode($datos['img_producto_frente']);
$producto_precio_star = $datos['precio_producto'];
$producto_vendido_star = $datos['producto_vendido'];
$producto_stock_star = $datos['producto_stock'];   
$producto_comment_star = $datos['producto_comentario'];    

?>