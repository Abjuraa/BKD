<?php
include("conexion.php");
$datos_recibidos = json_decode(file_get_contents("php://input"), true);

$queryPr = "SELECT * FROM `productos`";

if(isset($datos_recibidos)){
    $queryPr = $queryPr . " WHERE ";
    list('selectedSeccions' => $selectedSections, 'sizePage' => $sizePage, 'littlePriceValue' => $littlePriceValue, 'bigPriceValue' => $bigPriceValue) = $datos_recibidos;


    if(isset($selectedSections)){

        $queryPr = $queryPr . " ( ";
        foreach ($selectedSections as $key => $value) {
            if($key == 0){
                $queryPr = $queryPr . " `secciones_products` = " . $value . " ";
            } else{
                $queryPr = $queryPr . " OR `secciones_products` = " . $value . " ";
            }
        }
        $queryPr = $queryPr . " ) AND ";
        
    } else {
        
    } if(isset($littlePriceValue) && isset($bigPriceValue)){
        $queryPr = $queryPr . " (`precio_producto` > " . $littlePriceValue . " AND `precio_producto`< " . $bigPriceValue . " )";
    }

}

$resultadoSeccion = mysqli_query($conex, $queryPr);
$datosSeccion = array();

while ($row = mysqli_fetch_assoc($resultadoSeccion)){
    $datosSeccion[] = $row;
}

foreach($datosSeccion as &$seccionData) {
    foreach ($seccionData as $seccionName => &$valorPr) {
        if(($seccionName === 'img_producto_frente' && isset($valorPr) ) || ($seccionName === 'img_producto_reverso' && isset($valorPr)) ){
            $valorPr = utf8_decode(base64_encode($valorPr));
        }
    }
}
$jsonDatosSeccion = json_encode($datosSeccion);
header('Content-Type: application/json');
echo $jsonDatosSeccion;
?>