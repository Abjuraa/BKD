<?php
$queryPO = "SELECT * FROM `productos` WHERE `offert_now` = 1";
$resultadoProducts = mysqli_query($conex, $queryPO);
$datosProd = array();

while ($row = mysqli_fetch_assoc($resultadoProducts)) {
    $datosProd[] = $row;
}
    
// Codifica cada elemento en UTF-8
foreach ($datosProd as &$fila) {
    foreach ($fila as $clave => &$valor) {
        if(($clave === 'img_producto_frente' && isset($valor) ) || ($clave === 'img_producto_reverso' && isset($valor)) ){
            $valor = utf8_encode(base64_encode($valor));
        }
    }
}
    
$jsonDatosProd = json_encode($datosProd);

if ($jsonDatosProd === false) {
        echo 'Error en json_encode: ' . json_last_error_msg();
} else {
    echo '<script>';
    echo 'let datosProdOfferts = ' . $jsonDatosProd . ';';
    echo '</script>';
}
?>