<?php
$queryR = "SELECT * FROM `productos` WHERE `offert_now` = 0 ORDER BY RAND() LIMIT 12";
$resultadoRandom = mysqli_query($conex, $queryR);
$datosRandom = array();

while ($row = mysqli_fetch_assoc($resultadoRandom)){
    $datosRandom[] = $row;
}

foreach($datosRandom as &$rowData) {
    foreach ($rowData as $columName => &$valorR) {
        if(($columName === 'img_producto_frente' && isset($valorR) ) || ($columName === 'img_producto_reverso' && isset($valorR)) ){
            $valorR = utf8_decode(base64_encode($valorR));
        }
    }
}

$jsonDatosRandom = json_encode($datosRandom);

if ($jsonDatosRandom === false) {
    echo 'Error en json_encode: ' . json_last_error_msg();
} else{
    echo '<script>';
    echo 'let datosProdRandom = ' . $jsonDatosRandom . ';';
    echo '</script>';
}
?>