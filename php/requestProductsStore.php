<?php
$datos_recibidos = json_decode(file_get_contents("php://input"), true);
print_r($datos_recibidos);
// SELECT * FROM `productos` WHERE (`secciones_products` = 2 OR `secciones_products`= 4) AND (`precio_producto` > 40000 AND `precio_producto`< 1000000)

$queryPr = "SELECT * FROM `productos`";
$resultadoSeccion = mysqli_query($conex, $queryPr);
$datosSeccion = array();


if(isset($datos_recibidos)){
    $queryPr = $queryPr . " WHERE ";
    list('selectedSeccions' => $selectedSections, 'sizePage' => $sizePage, 'littlePriceValue' => $littlePriceValue, 'bigPriceValue' => $bigPriceValue) = $datos_recibidos;
    var_dump($selectedSections);
    var_dump($sizePage);
    var_dump($littlePriceValue);
    var_dump($bigPriceValue);

    if(isset($selectedSections)){
        print_r($queryPr);
        print_r($selectedSections);
        $queryPr = $queryPr . " ( ";
        foreach ($selectedSections as $key => $value) {
            if($key == 0){
                $queryPr = $queryPr . " `secciones_products` = " . $value . " ";
            } else{
                $queryPr = $queryPr . " OR `secciones_products` = " . $value . " ";
            }
        }
        $queryPr = $queryPr . " ) AND ";
        print_r($queryPr);
        
    } else {
        
    } if(isset($littlePriceValue) && isset($bigPriceValue)){
        $queryPr = $queryPr . " (`precio_producto` > " . $littlePriceValue . " AND `precio_producto`< " . $bigPriceValue . " )";
        print_r($queryPr);
    }

}

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
print_r($datosSeccion);

?>