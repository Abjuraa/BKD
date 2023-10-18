<?php

// Recibir datos del cuerpo de la solicitud POST
$datos_recibidos = json_decode(file_get_contents("php://input"), true);

// Hacer algo con los datos (por ejemplo, imprimirlos)
print_r($datos_recibidos);



?>